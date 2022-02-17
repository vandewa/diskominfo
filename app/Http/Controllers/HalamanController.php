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
use App\Models\ComCode; 

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

        $attachment = Attachment::where('id_tabel', $halaman->id_posting??'')->first();

        $picture = Menu::where('slug',$id)
        ->first();

        return view('home.halaman', compact('halaman', 'picture', 'attachment'));
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
         $informasi = ComCode::where('code_group', 'INFORMASI_ST')
        ->get();
        
        return view('halaman.create', compact('informasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $path = 'uploads/'.\Carbon\Carbon::now()->isoFormat('Y');
        $paths ='uploads/'.\Carbon\Carbon::now()->isoFormat('Y').'/'.\Carbon\Carbon::now()->isoFormat('MMMM').'/';
        
        if (!file_exists($paths)) {
             if (!file_exists($path)) {
              mkdir($path);
             }
            mkdir($paths);
         } 

           $b=Posting::create([
                'judul_posting' => $request->judul_posting,
                'slug' => $request->slug,
                'isi_posting' => $request->isi_posting,
                'id_kategori' => $request->id_kategori,
                'created_by' => $request->created_by,
                'informasi_st' => $request->informasi_st,
            ]);

   
           if($request->hasFile('sampul')){
                $files = $request->file('sampul'); 
                $prefix = date('Ymdhis');
                $by = $request->created_by;
                $extension = $files->extension();
                $filename = $prefix.'-'. $by.'.'.$extension;

                $files->move(public_path($paths), $filename);
                $attachment = new Attachment() ;
                $attachment->id_tabel = $b->id_posting;
                $attachment->path = $paths;
                $attachment->file_name = $filename;
                $attachment->save();

                Menu::create([
                'nama' => $request->judul_posting,
                'url' => '/page/'.$request->slug,
                'slug' => $request->slug,
                'isi_posting' => $request->isi_posting,
                'sampul' => $paths.$filename,
                'parent' => '',
                'informasi_st' => $request->informasi_st,
                ]);

              
        } else {
            Menu::create([
                'nama' => $request->judul_posting,
                'url' => '/page/'.$request->slug,
                'slug' => $request->slug, 
                'isi_posting' => $request->isi_posting,
                'parent' => '',
                'informasi_st' => $request->informasi_st,
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
        $informasi = ComCode::where('code_group', 'INFORMASI_ST')
        ->get();

        
        return view('halaman.edit', compact('halaman','informasi'));
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
                'informasi_st' => $request->informasi_st,
                ]);

        Posting::find($id)
        ->update([
                'isi_posting' => $request->isi_posting,
                'informasi_st' => $request->informasi_st,
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

        $posting = Posting::find($id);

        if(!empty($oke)){
        $path = public_path('uploads/').$oke->file_name;
        if (file_exists($path) || isset($oke->file_name)) {
            unlink($path);
            }
        }

        Menu::where('slug', $posting->slug)->delete();
        Posting::destroy($id);
        
    }

    public function getHalaman(Request $request)
    {

            $data = Posting::with(['nama', 'kategori'])->where('id_kategori', 9);
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
