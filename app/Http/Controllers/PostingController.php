<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Posting;
use DataTables;


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
        
        return view('posting.create');
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
            'keterangan' => 'required'
        ], 
        [
            'judul_posting.required' => 'Judul harus diisi.',
            'kata_kunci.required' =>'Kata Kunci harus diisi.',
            'keterangan.required' => 'Keterangan harus diisi.'
        ]);

        Posting::create($request->all());

        return $request;
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
        //
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
                    <a href="#" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="#" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                    <a href="#" class="list-icons-item text-teal-600"><i class="icon-cog6"></i></a>
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
                ->rawColumns(['action', 'status'])
                ->make(true);
        
    }
}
