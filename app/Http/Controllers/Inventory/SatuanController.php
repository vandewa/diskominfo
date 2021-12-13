<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Satuan;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Satuan::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="' . route('inventory:satuan.edit', $data->id) . ' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="' . route('inventory:satuan.destroy', $data->id) . ' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                        return $actionBtn;
                    }
                )
                ->make(true);
        }
        return view('inventory.satuan.index');
    }

    public function create()
    {
        return view('inventory.satuan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
            ]
        );
        Satuan::create($validated);
        return redirect()->route('inventory:satuan.index');
    }

    public function edit($id)
    {
        $data = Satuan::find($id);
        return view("inventory.satuan.edit", compact("data"));
    }

    public function show($id)
    { }

    public function update(Request $request, $id)
    {
        Satuan::find($id)->update($request->except(['_token']));
        return redirect()->route('inventory:satuan.index');
    }

    public function destroy($id)
    {
        $data = Satuan::destroy($id);
        return $data;
    }
}
