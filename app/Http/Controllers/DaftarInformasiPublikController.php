<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\DaftarInformasiPublik;

class DaftarInformasiPublikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = DaftarInformasiPublik::with(['type'])->whereNull('root');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('daftar.informasi.publik.index', ["root"=>$row->id]).'" class="btn btn-outline-primary rounded-round"><i class="icon-eye mr-2"></i>Tambah Child</a>
                     <a href="'.route('daftar-informasi-publik.edit', $row->id).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Edit</a>
                   <a href="'.route('daftar-informasi-publik.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                </div>';
                    })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('daftar-informasi-publik.index');
    }

    public function indexChild(Request $request)
    {
        if($request->ajax()){

            $data = DaftarInformasiPublik::with(['type'])->where('root', $request->root);

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('daftar.informasi.publik.edit', $row->id).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Edit</a>
                   <a href="'.route('daftar-informasi-publik.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                </div>';
                    })
                ->rawColumns(['action'])
                ->make(true);
        }

        $root = DaftarInformasiPublik::find($request->root);

        return view('daftar-informasi-publik.indexChild', compact('root'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar-informasi-publik.create');
        
    }

    public function createChild(Request $request)
    {

        $root = DaftarInformasiPublik::find($request->root);
        return view('daftar-informasi-publik.createChild',compact('root'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DaftarInformasiPublik::create([
            'root' => $request->root,
            'nomor' => $request->nomor,
            'jenis_informasi' => $request->jenis_informasi,
            'ringkasan_informasi' => $request->ringkasan_informasi,
            'pejabat_yg_menguasai' => $request->pejabat_yg_menguasai,
            'penanggungjawab_informasi' => $request->penanggungjawab_informasi,
            'waktu_pembuatan' => $request->waktu_pembuatan,
            'bentuk_informasi' => $request->bentuk_informasi,
            'retensi' => $request->retensi,
            'link' => $request->link,
            'type' => $request->type,
        ]);

        if($request->filled('root')) {
            return redirect(route('daftar.informasi.publik.index',['root'=> $request->root]))->with('status','oke');
        }

        return redirect(route('daftar-informasi-publik.index'))->with('status','oke');
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
        $data = DaftarInformasiPublik::find($id);
    
        return view('daftar-informasi-publik.edit', compact('data'));
    }

    public function editChild($id)
    {

        $data = DaftarInformasiPublik::find($id);
    
        return view('daftar-informasi-publik.editChild', compact('data'));
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
        // return $request->all();
        DaftarInformasiPublik::find($id)
        ->update([
            'root' => $request->root,
            'nomor' => $request->nomor,
            'jenis_informasi' => $request->jenis_informasi,
            'ringkasan_informasi' => $request->ringkasan_informasi,
            'pejabat_yg_menguasai' => $request->pejabat_yg_menguasai,
            'penanggungjawab_informasi' => $request->penanggungjawab_informasi,
            'waktu_pembuatan' => $request->waktu_pembuatan,
            'bentuk_informasi' => $request->bentuk_informasi,
            'retensi' => $request->retensi,
            'link' => $request->link,
            'type' => $request->type,
        ]);

        if($request->filled('root')) {
            return redirect(route('daftar.informasi.publik.index',['root'=> $request->root]))->with('status','oke');
        }

        return redirect(route('daftar-informasi-publik.index'))->with('status','oke');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarInformasiPublik::destroy($id);
        $oke = DaftarInformasiPublik::where('root',$id)->get();

            if(!empty($oke)) {
                foreach($oke as $okee){
                    $okee->delete();
            }

        }
       

    }

    public function destroyChild( $id)
    {
        DaftarInformasiPublik::destroy($id);
    }
}
