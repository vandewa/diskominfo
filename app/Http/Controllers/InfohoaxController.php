<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Posting;
use App\Models\Attachment;
use Illuminate\Support\Facades\File;
use \Cviebrock\EloquentSluggable\Services\SlugService;  

class InfohoaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('infohoax.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infohoax.create');
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
        $paths = 'uploads/'.\Carbon\Carbon::now()->isoFormat('Y').'/'.\Carbon\Carbon::now()->isoFormat('MMMM').'/';

        if (!file_exists($paths)) {
             if (!file_exists($path)) {
              mkdir($path);
             }
            mkdir($paths);
         } 

        $b= Posting::create([
            'judul_posting' => $request->judul_posting,
            'slug' => $request->slug,
            'id_kategori' => 7,
            'created_by' => $request->created_by
        ]);

        if($request->hasFile('file_name')){
                $files = $request->file('file_name'); 
                $prefix = date('Ymdhis');
                $by = $request->created_by;
                $extension = $files->extension();
                $filename = $prefix.'_'. $by.'.'.$extension;
                $files->move(public_path($paths), $filename);
                
                $attachment = new Attachment() ;
                $attachment->id_tabel = $b->id_posting;
                $attachment->path = $paths;
                $attachment->file_name = $filename;
                $attachment->save();

        
        } 

        return redirect ( url('infohoax'))->with('status', 'Data posting berhasil ditambahkan.');


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
        $infohoax = Posting::with(['attachment'])->find($id);
        return view('infohoax.edit', compact('infohoax'));
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
           Posting::find($id)
            ->update([
                'judul_posting' => $request->judul_posting,
                'slug' => $request->slug,
                'isi_posting' => $request->isi_posting,
                'updated_by' => $request->updated_by
            ]);

    //    if($request->hasfile('file_name')){
    //     $by = $request->updated_by;
    //     $files = $request->file('file_name');
    //     $prefix = date('Ymdhis');
    //     $no = 1;
    //         foreach($files as $a){
    //             $extension = $a->extension();
    //             $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
    //             $a->move(public_path('/uploads'), $filename);
    //             $attachment = Attachment::where('id_tabel',$id);
    //             Attachment::create(['file_name' => $filename, 'id_tabel'=> $id]);
    //             $no++;
    //             }
    //     }

        return redirect ('infohoax')->with('status', 'Data berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Posting::destroy($id);
    }

     public function getInfohoax(Request $request)
    {
            $data = Posting::with(['nama'])->where('id_kategori', 7)
            ->orderBy('created_at', 'desc');


            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = 
                    '<div class="list-icons">
                        <a href="'.route('infohoax.edit', $row->id_posting ).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                        <a href="'.route('infohoax.destroy', $row->id_posting ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                    return $actionBtn;
                })
                ->addColumn('status', function($row){
                    $actionBtn = '
                    <span class="badge badge-success">Active</span>';
                    return $actionBtn;
                })
                ->editColumn('judul_posting', function($a){
                    return $a->judul_posting;
                })
                ->addColumn('tanggal', function($a){
                    return \Carbon\Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y');
                    // return date('d F Y', strtotime($a->created_at));
                })
                
                ->editColumn('created_by', function($a)
                {
                    return $a->nama->name??'-';
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        
    }

    public function hapus($id)
    {

        $oke = Attachment::where('id_attachment',$id)->first();
        if($oke->file_name == 'diskominfowonosobo.jpg'){
            Attachment::where('id_attachment',$id)->delete();
            return redirect()->back();

        } else {
            
            $path = public_path()."/uploads/".$oke->file_name;
            File::delete($path);
            Attachment::where('id_attachment',$id)->delete();
            return redirect()->back();

        }
        
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->nama_kategori);
        return response()->json(['slug' => $slug]); 
    }

}
