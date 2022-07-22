<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\MasterAsset;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Session;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Peminjaman::with(['statusPinjam'])->select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn =
                    '<div class="list-icons">
                        <a href="'.route('inventory:peminjaman.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                        <a href="'.route('inventory:peminjaman.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->make(true);
        }
        return view('inventory.peminjaman.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userpetugas = User::orderBy('name', 'asc')->pluck('name', 'id');
        $barang = MasterAsset::orderBy('name', 'asc')->pluck('name', 'id');
        return view('inventory.peminjaman.create', compact('userpetugas', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
             'tanggal_peminjaman' => 'required',
             'peminjam_id' => 'required',
             'petugas_id' => 'required',
         ]);

        $a =  Peminjaman::create(
             [
                 'tanggal_peminjaman' => $request->tanggal_peminjaman.date(' H:i:s'),
                 'peminjam_id' => $request->peminjam_id,
                 'petugas_id' => $request->petugas_id,
                 'peminjaman_st' => 'PEMINJAMAN_ST_02',
             ]
         );

        foreach ($request->barang_id as $row){
           $a->peminjamanDetail()->create(
               [
                   'master_asset_id' => $row,
                   'peminjaman_st' => 'PEMINJAMAN_ST_02'
               ]
           );

           MasterAsset::find($row)->update(['peminjamanst' => 'PEMINJAMAN_ST_02']);
       }
        // MasterAsset::create($validated + ['peminjamanst' => 'PEMINJAMANST_00']);
         Session::flash('keterangan', 'Data berhasil disimpan');
         return redirect(route('inventory:peminjaman.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Peminjaman::with(['peminjamanDetail.master_asset', 'penerima', 'petugas', 'peminjam'])->find($id);
        return view('inventory.peminjaman.create', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
