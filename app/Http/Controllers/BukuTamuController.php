<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Models\Tamu;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tamu::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = 
                        '<div class="list-icons">
                            <a href="'.route('buku:tamu.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                            <a href="'.route('buku:tamu.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->addColumn('tanggal', function ($a) {
                        return \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggal)->isoFormat('dddd, D MMMM Y');
                 
                })
                ->make(true);
        }
        return view('tamu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tamu::create([
            'tanggal' =>Carbon::createFromFormat('d/m/Y', $request->tanggal)->format('Y-m-d'),
            'nama' => $request->nama,
            'keperluan' => $request->keperluan,
            'instansi' => $request->instansi,
            'jumlah' => $request->jumlah,
        ]);

         return redirect(route('buku:tamu.index'))->with('status','oke');

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
        $data = Tamu::find($id);
        $tanggal = Carbon::createFromFormat('Y-m-d', $data->tanggal)->format('d/m/Y');

        return view('tamu.edit', compact('data', 'tanggal'));
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
         Tamu::find($id)
            ->update([
                    'tanggal' =>Carbon::createFromFormat('d/m/Y', $request->tanggal)->format('Y-m-d'),
                    'nama' => $request->nama,
                    'keperluan' => $request->keperluan,
                    'instansi' => $request->instansi,
                    'jumlah' => $request->jumlah,
        ]);

         return redirect(route('buku:tamu.index'))->with('status','oke');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tamu::destroy($id);
    }
}
