<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\PermintaanColocation;

class ColocationServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = PermintaanColocation::with(['status'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                 ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('permintaan-colocation.show', $row->id ).'" class="btn btn-outline-primary rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                   <a href="'.route('permintaan-colocation.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                </div>';
                    })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('perijinan.colocation-server.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.colocation-server.create');
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

            $notifikasi = 'Terima kasih, permintaan layanan permohonan colocation server berhasil dikirim.'.urldecode('%0D%0A').'Mohon ditunggu notifikasi berikutnya. '. urldecode('%0D%0A%0D%0A'.'%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60%20');
            
        } else {
            $notifikasi ='Terima kasih, '.urldecode('%2A').'permintaan layanan permohonan colocation server'.urldecode('%2A').' berhasil dikirim. Saat ini kami sedang tidak bertugas, pesan Anda akan segera kami balas saat jam kerja.'.urldecode('%0D%0A%0D%0A').
             'Senin-Kamis : 07.30 - 16.00 WIB'.
             urldecode('%0D%0A').
             'Jumat : 07.30 - 11.00 WIB'.
             urldecode('%0D%0A%0D%0A%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60')
             ;
        }

          $request->validate([
                'g-recaptcha-response' => 'required|recaptcha',
            ],
            [
                'g-recaptcha-response.required' => 'Captcha harus benar.',
                'g-recaptcha-response.recaptcha' => 'Captcha harus benar.',
            ]);
            
        PermintaanColocation::create([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'instansi' => $request->instansi,
                'bidang' => $request->bidang,
                'alamat' => $request->alamat,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'merk' => $request->merk,
                'type' => $request->type,
                'model' => $request->model,
                'cpu' => $request->cpu,
                'hardisk' => $request->hardisk,
                'ram' => $request->ram,
                'status_st' => $request->status_st,
            ]);

        $nohape = $request->nomor;
        $notif = urldecode('%2APermintaan+Colocation+Server%2A%0D%0AOPD+%3A+' . $request->instansi . '%0D%0ABidang+%3A+' .  $request->bidang . '%0D%0AAlamat+%3A+' .  $request->alamat . '%0D%0ANomor+%3A+' . $request->nomor . '%0D%0AEmail+%3A+' . $request->email . 
        '%2ASpesifikasi+server+%2A%0D%0A' .
        '%0D%0AMerk/Brand+Server+%3A+'. $request->merk .'%0D%0AJenis/Type+Server+%3A+'. $request->type. '%0D%0ACPU+model+%3A+' . $request->model . '%0D%0ACPU+server+%3A+' . $request->cpu . ' Core' . '%0D%0AHarddisk+server+%3A+' . $request->hardisk . ' GB' .'%0D%0ARAM+server+%3A+' . $request->ram .' GB'   );

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
        $data = PermintaanColocation::find($id);
        $alasan = $data->alasan;
        return view('perijinan.colocation-server.edit', compact('data', 'alasan'));
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
        PermintaanColocation::find($id)
        ->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'instansi' => $request->instansi,
                'bidang' => $request->bidang,
                'alamat' => $request->alamat,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'merk' => $request->merk,
                'type' => $request->type,
                'model' => $request->model,
                'cpu' => $request->cpu,
                'hardisk' => $request->hardisk,
                'ram' => $request->ram,
                'status_st' => $request->status_st,
                'alasan' => $request->alasan,
            ]);

        $nohape = $request->nomor;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Colocation Server '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        } else {
           
            $notif = 'Status permintaan layanan Colocation Server '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }

        $this->notification($nohape, $notif);
        $this->sendGroupWA($notif);

        return redirect(route('permintaan-colocation.index'))->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PermintaanColocation::destroy($id);
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
