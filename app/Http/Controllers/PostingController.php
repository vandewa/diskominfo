<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Posting;
use App\Models\Attachment;
use App\Models\Position;
use DataTables;
use Carbon\Carbon;


class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posting= Posting::orderBy('created_at','desc')->get();
       
        return view('posting.index', compact('posting'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Position::all();

        return view('posting.create', compact('position'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_posting' => 'required',
            'kata_kunci' =>'required',
            'keterangan' => 'required',

        ],
        [
            'judul_posting.required' => 'Judul harus diisi.',
            'kata_kunci.required' =>'Kata Kunci harus diisi.',
            'keterangan.required' => 'Keterangan harus diisi.',

        ]);

        $b= Posting::create($request->except(['file_name']));
        
        $by = $request->created_by;
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');
        $no = 1;
        foreach($files as $a){
            $extension = $a->extension();
            $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
            $a->move(public_path('/uploads'), $filename);
            $attachment = new Attachment() ;
            $attachment->id_tabel = $b->id_posting;
            $attachment->file_name = $filename;
            $attachment->save();

            $no++;
        }

        return redirect ( url('posting'));


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
        $a = Posting::with(['attachment'])->find($id);
        return $a;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getPosting(Request $request)
    {
            $data = Posting::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <div class="list-icons">
                    <a href="posting/'.$row->id_posting.'/edit" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="#" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
                    return ucwords(str_replace('_', ' ', $a->posisi));
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    
    }
    

}
