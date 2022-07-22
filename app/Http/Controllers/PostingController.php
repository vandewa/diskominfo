<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostingcreateValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Posting;
use App\Models\Attachment;
use App\Models\Category;
use App\Models\ComCode;
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
        $category = Category::wherenotin('id',[0,2,7,8,9])
        ->get();

        $informasi = ComCode::where('code_group', 'INFORMASI_ST')
        ->get();

        return view('posting.create', compact( 'category', 'informasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostingcreateValidation $request)
    {
        $path = 'uploads/'.\Carbon\Carbon::now()->isoFormat('Y');
        $paths = 'uploads/'.\Carbon\Carbon::now()->isoFormat('Y').'/'.\Carbon\Carbon::now()->isoFormat('MMMM').'/';

        if (!file_exists($paths)) {
             if (!file_exists($path)) {
              mkdir($path);
             }
            mkdir($paths);
         }
    //     Posting::create([
    //        'posisi' => $request->posisi,
    //        'judul_posting' => $request->judul_posting,
    //        'slug' => $request->slug,
    //        'isi_posting' => $request->isi_posting,
    //        'kata_kunci' => $request->kata_kunci,
    //        'id_kategori' => $request->id_kategori,
    //        'created_by' => $request->updated_by,
    //        'keterangan' => $request->keterangan,
    //        'informasi_st' => $request->informasi_st
    //    ]);

        $b= Posting::create($request->except(['file_name','proengsoft_jsvalidation']));
        $no = 1;

        if($request->hasFile('file_name')){
                $files = $request->file('file_name');
            foreach($files as $a){
                $prefix = date('Ymdhis');
                $by = $request->created_by;
                $extension = $a->extension();
                $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
                $a->move(public_path($paths), $filename);
                $attachment = new Attachment() ;
                $attachment->id_tabel = $b->id_posting;
                $attachment->path = $paths;
                $attachment->file_name = $filename;
                $attachment->save();

                $no++;
                }
            } else {
                $attachment = new Attachment() ;
                $attachment->id_tabel = $b->id_posting;
                $attachment->path = 'uploads/';
                $attachment->file_name = 'diskominfowonosobo.jpg';
                $attachment->save();
            }

        Cache::flush();

        return redirect ( route('posting.index'))->with('status', 'Data posting berhasil ditambahkan.');


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
        $kategori = Category::wherenotin('id',[0,2,7,8,9])
        ->get();
        $informasi = ComCode::where('code_group', 'INFORMASI_ST')
        ->get();


        return view('posting.edit', compact('posting', 'kategori', 'informasi'));
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
           'keterangan' => $request->keterangan,
           'informasi_st' => $request->informasi_st
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

        return redirect(route('posting.index'))->with('status', 'Data berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oke = Attachment::where('id_tabel',$id)->get();
        if(!empty($oke)) {
            foreach($oke as $okee){
            $path = public_path($okee->path).$okee->file_name;
            if($path !=  public_path('uploads/diskominfowonosobo.jpg')){
                File::delete($path);
            }
            Attachment::where('id_tabel',$id)->delete();
            }
        }

        Posting::destroy($id);

    }

    public function getPosting(Request $request)
    {
            // $data = Posting::with(['nama', 'kategori']);
            $data = Posting::with(['nama', 'kategori'])->whereNotIn('id_kategori', [7,9]);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn =
                    '<div class="list-icons">
                        <a href="'.route('posting.edit', $row->id_posting ).'" class="btn btn-outline-success rounded-round"><i class="icon-zoomin3 mr-2"></i>Detail</a>
                        <a href="'.route('posting.destroy', $row->id_posting ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                    return $actionBtn;
                })
                ->addColumn('status', function($row){
                    $actionBtn = '
                    <span class="badge badge-success">Active</span>';
                    return $actionBtn;
                })
                ->addColumn('tanggal', function($a){
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
                    return $a->kategori->nama_kategori ?? '';
                })
                // ->editColumn('created_by', function($a)
                // {
                //     return $a->nama->name;
                // })
                ->rawColumns(['action', 'status'])
                ->make(true);

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('index'));

    }

    public function hapus($id)
    {

        $oke = Attachment::where('id_attachment',$id)->first();

        if($oke->file_name == 'diskominfowonosobo.jpg'){
            Attachment::where('id_attachment',$id)->delete();
            return redirect()->back();

        } else {

            $path = public_path($oke->path).$oke->file_name;
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
