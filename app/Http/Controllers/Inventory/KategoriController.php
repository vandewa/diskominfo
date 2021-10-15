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
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="' . route('kategorisss:kategori.edit', $data->id) . ' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="' . route('kategorisss:kategori.destroy', $data->id) . ' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
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
        Kategori::create($request->all());
        return redirect()->route('kategorisss:kategori.index');
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
        return redirect()->route('kategorisss:kategori.index');
    }

    public function destroy($id)
    {
        $data = Kategori::destroy($id);
        return $data;
    }
}
