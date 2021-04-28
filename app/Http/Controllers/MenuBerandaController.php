<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;

class MenuBerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuberanda = Posting::where('id_kategori',0)
        ->get();

        return view('menuberanda.index',compact('menuberanda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $menuberanda = Posting::find($id);

        return view('menuberanda.edit', compact('menuberanda'));
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
        Posting::find($id)
        ->update([
            'isi_posting' => $request->isi_posting
        ]);

        if($request->hasfile('file_name')){
        $by = $request->created_by;
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');
        $no = 1;
            foreach($files as $a){
                $extension = $a->extension();
                $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
                $a->move(public_path('/uploads'), $filename);
                $attachment = Attachment::where('id_tabel',$id);
                $attachment
                ->update(['file_name' => $filename]);
                $no++;
                }
        }

        return redirect ('menuberanda')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
