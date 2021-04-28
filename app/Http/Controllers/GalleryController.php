<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri= Gallery::orderBy('created_at','desc')
        ->get();

        return view('gallery.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

        $by = $request->created_by;
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');
        $extension = $files->extension();
        $filename = $prefix.'-'.$by.'.'.$extension;

        $files->move(public_path('/uploads'), $filename);

        Gallery::create([
            'file_name' => $filename,
            'keterangan' => $request->keterangan
        ]);

        return redirect('gallery')->with('status', 'Galeri berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Gallery::find($id);

        return view('gallery.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        Gallery::find($gallery)->update([
            'keterangan' => $request->keterangan
        ]);

        if($request->hasfile('file_name')){
        $by = $request->created_by;
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');

        $extension = $files->extension();
        $filename = $prefix. $by.'.'.$extension;
        $files->move(public_path('/uploads'), $filename);
        $galeri = Gallery::where('id',$gallery);
        $galeri
        ->update(['file_name' => $filename]);
        }


        return redirect ('youtube')->with('status', 'Link Youtube berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Gallery::destroy($id);

         return redirect ('gallery')-> with ('status', 'Data berhasil dihapus');
    }
}
