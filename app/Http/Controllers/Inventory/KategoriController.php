<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Kategori::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = 
                    '<div class="list-icons">
                        <a href="'.route('inventory:kategori.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                        <a href="'.route('inventory:kategori.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->make(true);
        }
        return view('inventory.kategori.index');
    }

    public function create()
    {
        return view('inventory.kategori.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        Kategori::create($validated);
        return redirect()->route('inventory:kategori.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Kategori::find($id);
        return view("inventory.kategori.edit", compact("data"));
    }

    public function update(Request $request, $id)
    {
        Kategori::find($id)->update($request->except(['_token']));
        return redirect()->route('inventory:kategori.index');
    }

    public function destroy($id)
    {
        $data = Kategori::destroy($id);
        return $data;
    }
}
