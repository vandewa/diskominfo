<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Models\Tamu;
use App\Models\Presensi;


class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hari_ini =  Carbon::now()->format('Y-m-d');
        $cek = Presensi::where('id_user', auth()->user()->id)->where('tanggal', '=', $hari_ini)->first();
        $cek_duplicate = Presensi::where('id_user', auth()->user()->id)->where('tanggal', '=', $hari_ini)->get();

        if ($request->ajax()) {
            $data = Tamu::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = 
                        '<div class="list-icons">
                            <a href="'.route('buku:tamu.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                            <a href="'.route('buku:tamu.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->addColumn('tanggalnya', function ($a) {
                        return \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggal)->isoFormat('dddd, D MMMM Y');
                 
                })
                ->make(true);
        }

        return view('presensi.index', compact('cek', 'cek_duplicate'));

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

            $path = storage_path('app/public/presensi/');
            if (!file_exists($path)) {
                    mkdir($path);
                }


            $hari_ini =  Carbon::now()->format('Y-m-d');
            $jam_sekarang =  Carbon::now()->format('H:i:s');
            $cek = Presensi::where('id_user', auth()->user()->id)->where('tanggal', '=', $hari_ini)->first();
            $cek_duplicate = Presensi::where('id_user', auth()->user()->id)->where('tanggal', '=', $hari_ini)->get();
            
            if(empty($cek)) {
                $keterangan = 'Masuk';
            }

            if(!empty($cek)) {

                if(count($cek_duplicate) != 0 && $cek->jam > '16:00:00' ) {
                    return redirect(route('presensi.index'))->with('status_duplicate_keluar', 'oke');
                }

                if($cek->tanggal == $hari_ini && $cek->jam < '16:00:00') {
                    $keterangan = 'Keluar';
                } else if(count($cek_duplicate) == 1 && $cek->jam < '16:00:00' ) {
                    return redirect(route('presensi.index'))->with('status_duplicate', 'oke');
                }

                
            }
        
    
            $img = $request->image;
            $folderPath = 'public/presensi/';

            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            
            $image_base64 = base64_decode($image_parts[1]);
            // $fileName = uniqid() . '.png';
            $fileName = Auth::user()->slug.'-'.date('Ymdhis'). '.png';
            
            $file = $folderPath . $fileName;
            Storage::put($file, $image_base64);

            Presensi::create([
                'id_user' => auth()->user()->id,
                'tanggal' => $hari_ini,
                'jam' =>$jam_sekarang,
                'keterangan' => $keterangan,

            ]);

            return redirect(route('presensi.index'))->with('status', 'oke');
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
        //
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
        //
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
