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
        if ($request->ajax()) {
            $data = MasterAsset::with(['satuan', 'kategori', 'status']);
            return DataTables::of($data)
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = 
                    '<div class="list-icons">
                        <a href="'.route('inventory:barang.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                        <a href="'.route('inventory:barang.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->make(true);
        }
        return view('inventory.barang.index');
    }

    public function create()
    {
        $satuan = Satuan::pluck('name', 'id');
        $kategori = Kategori::pluck('name', 'id');
        return view('inventory.barang.create', compact('satuan', 'kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'barcode' => ['required', 'numeric', 'unique:master_assets,barcode'],
                'name' => 'required',
                'tahun_anggaran' => 'required',
                'kategori_id' => 'required',
                'satuan_id' => 'required',
            ],
            [
                'kategori_id.required' => 'Wajib dipilih',
                'satuan_id.required' => 'Wajib dipilih'
            ]
        );
        MasterAsset::create($validated + ['peminjamanst' => 'PEMINJAMANST_00']);
        return redirect(route('inventory:barang.index'));
    }

    public function show($id)
    { }

    public function edit($id)
    {
        $satuan = Satuan::pluck('name', 'id');
        $kategori = Kategori::pluck('name', 'id');
        $data = MasterAsset::find($id);
        return view('inventory.barang.edit', compact('data', 'satuan', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        MasterAsset::find($id)->update($request->except(['_token']));
        return redirect()->route('inventory:barang.index');
    }

    public function destroy($id)
    {
        $data = MasterAsset::destroy($id);
        return $data;
    }
}
