<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Posting;
use App\Models\Attachment;
use App\Models\Category;
use App\Models\Menu;
use DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use \Cviebrock\EloquentSluggable\Services\SlugService; 

class HalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dinamis($id)
    {
        $halaman = Posting::where('slug',$id)->orderBy('created_at', 'desc')
        ->first();
        $picture = Menu::where('slug',$id)
        ->first();


        return view('home.halaman', compact('halaman', 'picture'));
    }

    public function index()
    {
         return view('halaman.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $b = Posting::create($request->except(['sampul']));
        if($request->hasFile('sampul')){
                $files = $request->file('sampul'); 
                $prefix = date('Ymdhis');
                $by = $request->created_by;
                $extension = $files->extension();
                $filename = $prefix.'-'. $by.'.'.$extension;

                $files->move(public_path('/uploads'), $filename);
                $attachment = new Attachment() ;
                $attachment->id_tabel = $b->id_posting;
                $attachment->file_name = $filename;
                $attachment->save();

                Menu::create([
                'nama' => $request->judul_posting,
                'url' => '/page/'.$request->slug,
                'slug' => $request->slug,
                'isi_posting' => $request->isi_posting,
                'sampul' => $filename,
                'parent' => ''
                ]);

                // Posting::create([
                // 'nama' => $request->judul_posting,
                // 'url' => $request->slug,
                // 'slug' => $request->slug,
                // 'isi_posting' => $request->isi_posting,
                // 'sampul' => $filename,
                // 'parent' => ''
                // ]);

        } else {
            Menu::create([
                'nama' => $request->judul_posting,
                'url' => '/page/'.$request->slug,
                'slug' => $request->slug, 
                'isi_posting' => $request->isi_posting,
                'parent' => '',
            ]);
        }
        

        return redirect ( route('halaman.index'))->with('status', 'Data halaman berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $halaman = Posting::with(['attachment','kategori', 'halaman'])->find($id);

        
        return view('halaman.edit', compact('halaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         Menu::where('slug',$request->slug)
          ->update([
                'isi_posting' => $request->isi_posting,
                ]);

        Posting::find($id)
        ->update([
                'isi_posting' => $request->isi_posting,
                ]);

        return redirect(route('halaman.index'))->with('status', 'Data berhasil diubah.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $oke = Attachment::where('id_tabel',$id)->first();
        
        if($oke->file_name??'' != ''){
        $path = public_path()."/uploads/".$oke->file_name;
        // File::destroy($path);
        unlink($path);
        $oke->delete();
        Posting::destroy($id);
         } else {
            Posting::destroy($id);
         }
        
        
    }

    public function getHalaman(Request $request)
    {

            $data = Posting::with(['nama', 'kategori'])->where('id_kategori', 9)->orderBy('created_at', 'desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <div class="list-icons">
                    <a href="'.route('halaman.edit', $row->id_posting ).' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="'.route('halaman.destroy', $row->id_posting ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                    </div>';
                    return $actionBtn;
                })
                ->addColumn('status', function($row){
                    $actionBtn = '
                    <span class="badge badge-success">Active</span>';
                    return $actionBtn;
                })
                ->editColumn('created_at', function($a){
                    return \Carbon\Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y');
                    // return date('d F Y', strtotime($a->created_at));
                })
                ->editColumn('halaman', function($data)
                {
                    $file = '<a href="../page/'.$data->slug.'" target="_blank">'.$data->slug.'</a>';
                    return $file;
                })
                
                // ->editColumn('id_kategori', function($a)
                // {
                //     return $a->kategori->nama_kategori ?? '';
                // })
                // ->editColumn('created_by', function($a)
                // {
                //     return $a->nama->name;
                // })
                ->rawColumns(['action', 'status', 'halaman'])
                ->make(true);
        
    }
}
