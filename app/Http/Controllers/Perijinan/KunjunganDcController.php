<?php

namespace App\Http\Controllers\Perijinan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KunjunganDc;
use Illuminate\Support\Facades\Auth;
use Session;
use DataTables;

class KunjunganDcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = KunjunganDc::with(['jenisIdentitas', 'penanggungJawab','menyetujui','status'])->select('ijin_kunjungans.*');

            return DataTables::of($data)
                ->editColumn('created_at', function($a){
                   return $a->created_at->isoFormat('D MMMM Y H:m:s');
                })
                ->addColumn('action', function($row){

                return'<div class="list-icons">
                        <a href="'.route('kunjungan-data-center.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                        <a href="'.route('kunjungan-data-center.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                        </div>';
                    })
                ->make(true);
        }

        return view('perijinan.kunjungan-data-center.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('perijinan.kunjungan-data-center.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = KunjunganDc::create($request->all());
        if($data){
            Session::flash('keterangan', 'Data berhasil di simpan');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = KunjunganDc::with(['jenisIdentitas', 'penanggungJawab','menyetujui','status'])->find($id);

        return view('perijinan.kunjungan-data-center.show', compact('data'));
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
}
