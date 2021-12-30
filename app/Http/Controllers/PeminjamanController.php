<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\MasterAsset;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
            $data = Peminjaman::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="' . route('inventory:peminjaman.edit', $data->id) . ' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="' . route('inventory:peminjaman.destroy', $data->id) . ' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
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
        // $items = $request->get('barang_id');
        $items = ['1', '2', '3'];
        $selected_items = '';
        foreach ($items as $item) {
            echo   $item . ',';
        }
        // dd($items);
        // $validated = $request->validate([
        //     'tanggal_peminjaman' => 'required',
        //     'tanggal_pengembalian' => 'required',
        //     'peminjam_id' => 'required',
        //     'peminjaman_st' => 'required',
        //     'petugas_id' => 'required',
        //     'penerima_id' => 'required',
        // ]);
        // MasterAsset::create($validated + ['peminjamanst' => 'PEMINJAMANST_00']);
        // Session::flash('keterangan', 'Data berhasil disimpan');
        // return redirect(route('inventory:barang.index'));
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
    public function edit(Peminjaman $peminjaman)
    {
        //
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
