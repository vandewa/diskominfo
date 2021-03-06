<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use DataTables;
use App\Models\ComCode; 
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
       
        return view('menuberanda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentt = DB::table('menu')
        ->get();
        $informasi = ComCode::where('code_group', 'INFORMASI_ST')
        ->get();

        return view('menuberanda.create', compact('parentt', 'informasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if($request->hasFile('file_name')){
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');
        $by = $request->created_by;
        $extension = $files->getClientOriginalExtension();
        $filename = $prefix.'_'. $by.'.'.$extension;
        $request->file('file_name')->move(public_path('uploads/lampiran'), $filename);

            Menu::create([
                'parent' => $request->parent,
                'nama' => $request->nama,
                'informasi_st' => $request->informasi_st,
                'url' => '/uploads/lampiran/'.$filename,
                'lampiran' => 'y'
            ]);
        } else {
             Menu::create([
                'parent' => $request->parent,
                'nama' => $request->nama,
                'informasi_st' => $request->informasi_st,
                'lampiran' => 'n'
            ]);

        }


        return redirect(route('menuberanda.index'))->with('status', 'Data berhasil ditambahkan.');

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
        $menuberanda = Menu::find($id);
        $informasi = ComCode::where('code_group', 'INFORMASI_ST')
        ->get();
        $parentt = Menu::all();

        return view('menuberanda.edit', compact('menuberanda','parentt','informasi'));
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
        Menu::find($id)
            ->update([
            'nama' => $request->nama,
            'url' => $request->url,
            'informasi_st' => $request->informasi_st,
            'parent' => $request->parent,
        ]);

        Posting::where('slug',$request->slug)
        ->update([
                'informasi_st' => $request->informasi_st,
                ]);


        return redirect (route('menuberanda.index'))->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      public function getMenuBeranda(Request $request)
    {
            $data = Menu::with(['childs','parent','halaman'])
            ->whereNotin('parent', ['transparansi', 'ppid', 'profil', '- Pilih -']);

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = 
                    '<div class="list-icons">
                        <a href="'.route('menuberanda.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-zoomin3 mr-2"></i>Detail</a>
                        <a href="'.route('menuberanda.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                    return $actionBtn;
                })
               ->editColumn('nama', function($data)
                {
                    return $data->nama;
                })
                ->editColumn('url', function($data)
                {
                    $file = '<a href="'.$data->url.'" target="_blank">'.$data->url.'</a>';
                    return $file;
                })
                ->editColumn('parent', function($data)
                {

                    $a = '';
                    foreach($data->childs as $menu){
                        $b = $menu->nama??'';
                        $a = $a.' '.$b;
                    }
                    return $a;

                    // return $data->parent;
                })
                ->editColumn('lampiran', function($data)
                {

                    if($data->lampiran == 'y'){
                        return '<div class="d-flex justify-content-center"><i class="icon-checkmark2"></i></div>';
                    } else {
                        return '<i class="icon-cross3"></i>';
                    }
                })
                ->rawColumns(['action','lampiran','url'])
                ->make(true);
        
    }

    public function destroy($id)
    {
        $cek = Menu::find($id);
        $oke = Posting::where('slug',$cek->slug)->first();
        $path = public_path($cek->url);

        if(!empty($oke)){
            $oke->delete();
        }
        
        if (file_exists($path)) {
            unlink($path);
        }

        $cek->delete();
    }
}
