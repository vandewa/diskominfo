<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\PermohonanAplikasi;

class PermohonanAplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = PermohonanAplikasi::with(['status'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('permohonan-aplikasi.show', $row->id ).'" class="btn btn-outline-primary rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                    <a href="'.route('permohonan-aplikasi.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('perijinan.permohonan-aplikasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.permohonan-aplikasi.create');
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

            $notifikasi = 'Terima kasih, permintaan layanan permohonan aplikasi berhasil dikirim.'.urldecode('%0D%0A').'Mohon ditunggu notifikasi berikutnya. '. urldecode('%0D%0A%0D%0A'.'%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60%20');
            
        } else {
            $notifikasi ='Terima kasih, '.urldecode('%2A').'permintaan layanan permohonan aplikasi'.urldecode('%2A').' berhasil dikirim. Saat ini kami sedang tidak bertugas, pesan Anda akan segera kami balas saat jam kerja.'.urldecode('%0D%0A%0D%0A').
             'Senin-Kamis : 07.30 - 16.00 WIB'.
             urldecode('%0D%0A').
             'Jumat : 07.30 - 11.00 WIB'.
             urldecode('%0D%0A%0D%0A%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60')
             ;

        }

        $request->validate([
            'captcha' => 'required|captcha',
        ],
        [
            'required' => 'Please verify that you are not a robot.',
            'captcha' => 'Captcha error! try again later or contact site admin.',
        ]);
            
        $nohape = $request->nomor;

        if($request->hasFile('file_name')){
            $files = $request->file('file_name');
            $prefix = date('Ymdhis');
            $extension = $files->getClientOriginalExtension();
            $filename = $prefix.'.'.$extension;
            $request->file('file_name')->move(public_path('uploads/layanan'), $filename);

            PermohonanAplikasi::create([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'nip' => $request->nip,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'latar_belakang' => $request->latar_belakang,
                'tujuan' => $request->tujuan,
                'status_st' => $request->status_st,
                'file_name' => $filename,
            ]);

             $notif = urldecode('%2APermohonan+Aplikasi%2A%0D%0ANama+Pemohon+%3A+' .$request->nama . '%0D%0AOPD+%3A+' .  $request->instansi . '%0D%0ANIP+%3A+' . $request->nip . '%0D%0ANomor+telepon+%3A+' .$request->nomor. '%0D%0AEmail+%3A+' . $request->email.'%0D%0ALatar+belakang+pembuatan+aplikasi+%3A+' . $request->latar_belakang . '%0D%0ATujuan+pembuatan+aplikasi+%3A+' . $request->tujuan.'%0D%0A'.'Lampiran : ('.html_entity_decode('&#8730;'). ')');

        } else {

             PermohonanAplikasi::create([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'nip' => $request->nip,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'latar_belakang' => $request->latar_belakang,
                'tujuan' => $request->tujuan,
                'status_st' => $request->status_st,
            ]);

             $notif = urldecode('%2APermohonan+Aplikasi%2A%0D%0ANama+Pemohon+%3A+' .$request->nama . '%0D%0AOPD+%3A+' .  $request->instansi . '%0D%0ANIP+%3A+' . $request->nip . '%0D%0ANomor+telepon+%3A+' .$request->nomor. '%0D%0AEmail+%3A+' . $request->email.'%0D%0ALatar+belakang+pembuatan+aplikasi+%3A+' . $request->latar_belakang . '%0D%0ATujuan+pembuatan+aplikasi+%3A+' . $request->tujuan.'%0D%0ALampiran%3A+(%C3%97)');

        }
       
        $this->notification($nohape, $notifikasi);
        $this->sendGroupWA($notif);
        $this->notificationStakeholder($notif);


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
        $data = PermohonanAplikasi::find($id);
        $alasan = $data->alasan;
        $lampiran = $data->file_name;
        return view('perijinan.permohonan-aplikasi.edit', compact('data', 'alasan', 'lampiran'));
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
         PermohonanAplikasi::find($id)
        ->update([
            'nama' => $request->nama,
            'instansi' => $request->instansi,
            'nip' => $request->nip,
            'nomor' => $request->nomor,
            'email' => $request->email,
            'latar_belakang' => $request->latar_belakang,
            'tujuan' => $request->tujuan,
            'status_st' => $request->status_st,
            'alasan' => $request->alasan,
        ]);

        $nohape = $request->nomor;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Permohonan Aplikasi '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        } else {
           
            $notif = 'Status permintaan layanan Permohonan Aplikasi '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }
     
        $this->notification($nohape, $notif);
        $this->sendGroupWA($notif);
    
        return redirect()->route('permohonan-aplikasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PermohonanAplikasi::destroy($id);
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

    public function notificationStakeholder($notif)
    {
        Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => '081329585110', // Pak Fahmi
            'message' => $notif,
        ]);

        Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => '08122513172', // Bu Win
            'message' => $notif,
        ]);
    
    }
}
