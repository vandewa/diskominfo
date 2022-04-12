<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\JaringanInternet;



class JaringanInternetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = JaringanInternet::with(['status', 'jaringan', 'layanan'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                 ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('jaringan-internet.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                    <a href="'.route('jaringan-internet.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('perijinan.jaringan-internet.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.jaringan-internet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if( $request->waktu > '07:30:00' && $request->waktu < '16:00:00'){
             $notifikasi = 'Terima kasih, permintaan layanan jaringan internet berhasil dikirim, mohon ditunggu notifikasi berikutnya.';
        } else {
            $notifikasi ='Terima kasih, '.urldecode('%2A').'permintaan layanan jaringan internet'.urldecode('%2A').' berhasil dikirim. Saat ini kami sedang tidak bertugas, pesan Anda akan segera kami balas saat jam kerja.'.urldecode('%0D%0A%0D%0A').
             'Senin-Kamis : 07.30 - 16.00 WIB'.
             urldecode('%0D%0A').
             'Jumat : 07.30 - 11.00 WIB'.
             urldecode('%0D%0A%0D%0A%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60')
             ;

        }

        JaringanInternet::create([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'nip' => $request->nip,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'jaringan_st' => $request->jaringan_st,
                'layanan_st' => $request->layanan_st,
                'status_st' => $request->status_st,
            ]);

        if($request->jaringan_st == 'JARINGAN_ST_01'){
            $jaringan_st = 'LAN';
        } else {
            $jaringan_st = 'FO';
        }

        if($request->layanan_st == 'LAYANAN_INTERNET_ST_01'){
            $layanan_st = 'Pemasangan Baru';
        } else {
            $layanan_st = 'Perbaikan Jaringan';
        }

            $nohape = $request->nomor;
            $notif = urldecode('%2APermohonan+Jaringan+Internet%2A%0D%0AOPD+%3A+' .  ucwords($request->instansi) . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0ANIP+%3A+' . $request->nip . '%0D%0AEmail+%3A+' . $request->email .'%0D%0ANomor+telepon+%3A+' . $request->nomor . '%0D%0AJenis+layanan+%3A+' . $jaringan_st . '%0D%0AJenis+layanan+%3A+' . $layanan_st   );

            $this->notification($nohape, $notifikasi);
            // $this->sendGroupWA($notif);
      
            return redirect(route('pengajuanizin'))->with('status','oke');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = JaringanInternet::find($id);
        $alasan = $data->alasan;
        return view('perijinan.jaringan-internet.edit', compact('data', 'alasan'));
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
        JaringanInternet::find($id)
        ->update([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'nip' => $request->nip,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'jaringan_st' => $request->jaringan_st,
                'layanan_st' => $request->layanan_st,
                'status_st' => $request->status_st,
                'alasan' => $request->alasan,
            ]);

        $nohape = $request->nomor;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Jaringan Internet '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');

        } else {
           
            $notif = 'Status permintaan layanan Jaringan Internet '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }

        $this->notification($nohape, $notif);
        $this->sendGroupWA($notif);

        return redirect(route('jaringan-internet.index'))->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JaringanInternet::destroy($id);
    }

    public function notification($nohape, $notifikasi)
    {

        $response = Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => $nohape,
            'message' => $notifikasi,
        ]);

    }
    
    public function sendGroupWA($notif)
    {
        $response = Http::asForm()->post('http://10.0.1.21:8000/send-group-message', [
            'name' => 'DC Team',
            'message' => $notif,
        ]);
    
    }
}
