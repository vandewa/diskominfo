<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use DataTables;

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

        return view('menuberanda.create', compact('parentt'));
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
            $file = $request->file('file_name');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/uploads/lampiran'), $filename);
            Menu::create([
                'parent' => $request->parent,
                'nama' => $request->nama,
                'url' => 'uploads/lampiran/'.$filename,
                'lampiran' => 'y'
            ]);
        } else {
             Menu::create([
                'parent' => $request->parent,
                'nama' => $request->nama,
                'lampiran' => 'n'
            ]);

        }

        return redirect('menuberanda')->with('status', 'Data berhasil ditambahkan.');
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

        $parentt = DB::table('menu')
        ->get();

        return view('menuberanda.edit', compact('menuberanda','parentt'));
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

        if($request->hasFile('file_name')){
            $file = $request->file('file_name');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/uploads'), $filename);
             Menu::find($id)
            ->update([
            'url' => $request->url,
            'parent' => $request->parent,
            'isi_posting' => $request->isi_posting,
            'file_name' => $filename
            ]);
        }

        if($request->filled('isi_posting')){
            Menu::find($id)
            ->update([
            'url' => $request->url,
            'parent' => $request->parent,
            'isi_posting' => $request->isi_posting
            ]);
        }

        else {

             Menu::find($id)
            ->update([
            'url' => $request->url,
            'parent' => $request->parent
        ]);

        }

        return redirect ('menuberanda')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      public function getMenuBeranda(Request $request)
    {
            $data = Menu::with(['childs','parent'])
            ->where('parent','!=','transparansi')
            ->where('parent','!=','profil')
            ->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="'.route('menuberanda.edit', $data->id ).' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="'.route('menuberanda.destroy', $data->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    return $actionBtn;
                })
               ->editColumn('menu', function($data)
                {
                    return $data->nama;
                })
                ->editColumn('url', function($data)
                {
                    $file = '<a href="'.$data->url.'" target="_blank">'.$data->url.'</a>';
                    return $file;
                })
                ->editColumn('submenu', function($data)
                {

                    $a = '';
                    foreach($data->childs as $menu){
                        $b = $menu->nama??'';
                        $a = $a.' '.$b;
                    }
                    return $a;
                })
                ->editColumn('lampiran', function($data)
                {

                    if($data->lampiran == 'y'){
                        return '<div class="d-flex justify-content-center"><i class="icon-checkmark2"></i></div>';
                    } else {
                        return '<i class="icon-cross3"></i>';
                    }
                })
                ->rawColumns(['action', 'status', 'lampiran','url'])
                ->make(true);
        
    }

    public function destroy($id)
    {
         Menu::destroy($id);
    }
}
