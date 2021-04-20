<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lampiran;
use App\Http\Requests\LampirancreateValidation;

class LampiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lampiran = Lampiran::with(['nama'])
        ->orderBy('keterangan', 'asc')
        ->get();
        
        return view('lampiran.index', compact('lampiran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lampiran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nama = $request->file('nama_lampiran')->getClientOriginalName();
        $request->file('nama_lampiran')->move(public_path('/uploads/lampiran'), $nama);
       
        Lampiran::create([
            'nama_lampiran' => $nama,
            'keterangan' => $request->keterangan,
            'created_by' => $request->created_by

        ]);
    
        return redirect(url('lampirans'))->with('status', 'Data berhasil ditambahkan.');
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
        $lampiran = Lampiran::find($id);

        return view('lampiran.edit', compact('lampiran'));
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
        $request->validate([
            'keterangan' => 'required'
        ],
        [
            'keterangan.required' => 'Keterangan harus diisi.'
        ]
        );

        Lampiran::find($id)
        ->update([
            'keterangan' => $request->keterangan
        ]);

        return redirect('lampirans')->with('status', 'Data berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lampiran::destroy($id);

        return redirect ('lampirans')-> with ('status', 'Data berhasil dihapus');
    }
}
