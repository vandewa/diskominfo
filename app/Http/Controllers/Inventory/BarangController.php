<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\MasterAsset;
use App\Models\Satuan;
use Session;
use DataTables;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = MasterAsset::with(['satuan', 'kategori']);
            return DataTables::of($data)
                ->addColumn('action', function ($a){

                })
                ->make(true);

        }
        return view('inventory.barang.index');
    }

    public function create()
    {
        $satuan = Satuan::pluck('name','id');
        $kategori = Kategori::pluck('name', 'id');
        return view('inventory.barang.create', compact('satuan', 'kategori'));
    }

    public function store(Request $request)
    {

        $data = MasterAsset::create($request->all() + ['peminjamanst' => 'PEMINJAMANST_00']);
        Session::flash('keterangan', 'Data berhasil disimpan');

        return redirect(route('inventory:barang.index'));

    }

    public function show($id)
    {

    }
    public function edit($id)
    {
        return view('inventory.barang.edit');
    }
    public function update(Request $request, $id)
    {

    }
    public function delete($id)
    {

    }

}
