<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('inventory.satuan.create');
    }

    public function store(Request $request)
    {
        Satuan::create($request->all());

        return redirect()->route('inventory:satuan.index');
    }

    public function edit($id)
    {

    }

    public function show($id)
    {

    }
    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }
}
