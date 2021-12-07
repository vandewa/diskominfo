<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use DataTables;
use App\Http\Requests\GallerycreateValidation;
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

        return view('gallery.index');
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
    public function store(GallerycreateValidation $request)
    {


        $by = $request->created_by;
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');
        $extension = $files->extension();
        $filename = $prefix . '-' . $by . '.' . $extension;

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

        if ($request->hasfile('file_name')) {
            $by = $request->created_by;
            $files = $request->file('file_name');
            $prefix = date('Ymdhis');

            $extension = $files->extension();
            $filename = $prefix . $by . '.' . $extension;
            $files->move(public_path('/uploads'), $filename);
            $galeri = Gallery::where('id', $gallery);
            $galeri
                ->update(['file_name' => $filename]);
        }

        return redirect('youtube')->with('status', 'Link Youtube berhasil diubah');
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
    }
    public function getGallery(Request $request)
    {
        $data = Gallery::orderBy('created_at', 'desc')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($data) {
                    $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="' . route('gallery.edit', $data->id) . ' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="' . route('gallery.destroy', $data->id) . ' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    return $actionBtn;
                }
            )
            ->editColumn('foto', function ($data) {
                $foto = '<a href="' . asset('uploads/' . $data->file_name) . '" target="_blank"><img src="' . asset('uploads/' . $data->file_name) . '" style="height:50px;"></a>';
                return $foto;
            })
            ->editColumn('keterangan', function ($data) {
                return $data->keterangan;
            })
            ->rawColumns(['action', 'status', 'foto'])
            ->make(true);
    }
}
