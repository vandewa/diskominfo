<?php

namespace App\Http\Controllers\Integrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wonosobo\User;
use App\Models\Wonosobo\Kecamatan;
use App\Models\Wonosobo\Desa;
use App\Models\Wonosobo\SKPD;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class UserIntegrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->ajax()){

            $data = User::with(['skpd', 'kecamatan', 'desa'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    return
                    '<div class="list-icons">
                        <a href="'.route('user-integrasi.edit', $data->id_users ).'" class="btn btn-outline-dark rounded-round"><i class="icon-key mr-2"></i>Ganti Password</a>
                        <a href="'.route('user-integrasi.destroy', $data->id_users ).'" class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                    })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('integrasi.user.index');
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::where('kode_propinsi', 33)->orderBy('nama_kecamatan', 'asc')->pluck('nama_kecamatan', 'id_kecamatan');
        $skpd = SKPD::orderBy('nama_skpd', 'asc')->pluck('nama_skpd', 'id_skpd');

        return view('integrasi.user.create', compact('kecamatan', 'skpd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(empty($request->id_kecamatan) && empty($request->id_desa)){
           $request->id_kecamatan = 0;
           $request->id_desa = 0;
        } else if(empty($request->id_kecamatan)){
            $request->id_kecamatan = 0;
        } else if(empty($request->id_desa)) {
            $request->id_desa = 0;
        } else if (empty($request->id_skpd)) {
            $request->id_skpd = 0;
        }

        User::create([
            'user_name' => $request->user_name,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'hak_akses' => $request->hak_akses,
            'id_skpd' => $request->id_skpd,
            'id_kecamatan' => $request->id_kecamatan,
            'id_desa' => $request->id_desa,
            'id_kabupaten' => 1,
            'id_propinsi' => 1,
            'created_by' => 1,
            'status' => 1,
            'created_time' => $request->created_time,
        ]);

        return redirect(route('user-integrasi.index'))->with('status', 'Data user berhasil ditambah');
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
        $data = User::find($id); 

        return view('integrasi.user.edit', compact('data'));
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

        if($request->filled('password')){
            User::find($id)->update([
                'password' => Hash::make($request->password)
            ]);
        }

        return redirect(route('user-integrasi.index'))->with('status', 'Data user berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    }

    public function desa(Request $request)
    {
        $state = Desa::where('id_kecamatan', $request->country_id)->orderBy('nama_desa', 'asc')->pluck('nama_desa', 'id_desa');
        return response()->json($state);

    }
}
