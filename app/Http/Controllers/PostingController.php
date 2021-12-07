<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostingcreateValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Posting;
use App\Models\Attachment;
use App\Models\Category;
use DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use \Cviebrock\EloquentSluggable\Services\SlugService; 




class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('posting.index');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::wherenotin('id',[0,2])
        ->get();

        return view('posting.create', compact( 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(PostingcreateValidation $request)
    {
        
        $b= Posting::create($request->except(['file_name']));
        $no = 1;

        if($request->hasFile('file_name')){
                $files = $request->file('file_name'); 
            foreach($files as $a){
                $prefix = date('Ymdhis');
                $by = $request->created_by;
                $extension = $a->extension();
                $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
                $a->move(public_path('/uploads'), $filename);
                $attachment = new Attachment() ;
                $attachment->id_tabel = $b->id_posting;
                $attachment->file_name = $filename;
                $attachment->save();

                $no++;
                }
        } else {
            $attachment = new Attachment() ;
            $attachment->id_tabel = $b->id_posting;
            $attachment->file_name = 'diskominfowonosobo.jpg';
            $attachment->save();
        }

        return redirect ( url('posting'))->with('status', 'Data posting berhasil ditambahkan.');


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
        $posting = Posting::with(['attachment','kategori'])->find($id);
        $kategori = Category::wherenotin('id',[0,2])
        ->get();
        return view('posting.edit', compact('posting', 'kategori'));
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
           'posisi' => $request->posisi,
           'judul_posting' => $request->judul_posting,
           'slug' => $request->slug,
           'isi_posting' => $request->isi_posting,
           'kata_kunci' => $request->kata_kunci,
           'id_kategori' => $request->id_kategori,
           'updated_by' => $request->updated_by,
           'keterangan' => $request->keterangan
       ]);

       if($request->hasfile('file_name')){
        $by = $request->updated_by;
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');
        $no = 1;
            foreach($files as $a){
                $extension = $a->extension();
                $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
                $a->move(public_path('/uploads'), $filename);
                $attachment = Attachment::where('id_tabel',$id);
                Attachment::create(['file_name' => $filename, 'id_tabel'=> $id]);
                $no++;
                }
        }

        return redirect ('posting')->with('status', 'Data berhasil diubah.');

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

    public function getPosting(Request $request)
    {
            $data = Posting::select('*')->latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <div class="list-icons">
                    <a href="'.route('posting.edit', $row->id_posting ).' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="'.route('posting.destroy', $row->id_posting ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
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
                ->editColumn('posisi', function($a){

                    if($a->posisi == 'highlight' ){
                        return 'Highlight';
                    } else {
                        return 'Biasa';
                    }

                })
                
                ->editColumn('id_kategori', function($a)
                {
                    Posting::with(['kategori']);
                    return $a->kategori->nama_kategori;
                })
                ->editColumn('created_by', function($a)
                {
                    Posting::with(['nama']);
                    return $a->nama->name;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');

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
        $slug = SlugService::createSlug(Posting::class, 'slug', $request->judul_posting);
        return response()->json(['slug' => $slug]); 
    }

}
