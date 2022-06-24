<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DIPDikecualikan;
use Yajra\DataTables\Facades\DataTables;

class DaftarInformasiPublikDikecualikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->ajax()){

            $data = DIPDikecualikan::select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                    '<div class="list-icons">
                        <a href="'.route('dip-dikecualikan.edit', $row->id).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Edit</a>
                        <a href="'.route('dip-dikecualikan.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                    })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('daftar-informasi-publik-dikecualikan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar-informasi-publik-dikecualikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();  
         DIPDikecualikan::create([
            'waktu_pembuatan' => $request->waktu_pembuatan,
            'nomor' => $request->nomor,
            'informasi_dikecualikan' => $request->informasi_dikecualikan,
            'dasar_hukum' => $request->dasar_hukum,
            'dibuka' => $request->dibuka,
            'ditutup' => $request->ditutup,
            'jangka_waktu' => $request->jangka_waktu,
        ]);

        return redirect(route('dip-dikecualikan.index'))->with('status','Data berhasil ditambahkan');
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
        $data = DIPDikecualikan::find($id);
    
        return view('daftar-informasi-publik-dikecualikan.edit', compact('data'));
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
        DIPDikecualikan::find($id)
        ->update([
            'waktu_pembuatan' => $request->waktu_pembuatan,
            'nomor' => $request->nomor,
            'informasi_dikecualikan' => $request->informasi_dikecualikan,
            'dasar_hukum' => $request->dasar_hukum,
            'dibuka' => $request->dibuka,
            'ditutup' => $request->ditutup,
            'jangka_waktu' => $request->jangka_waktu,
        ]);


        return redirect(route('dip-dikecualikan.index'))->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DIPDikecualikan::destroy($id);
    }
}
