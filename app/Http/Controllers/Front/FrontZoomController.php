<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zoom;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;


class FrontZoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permintaan.zoom.index');
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
        $request->validate([
            'captcha' => 'required','captcha',
        ],
        [
            'required' => 'Please verify that you are not a robot.',
            'captcha' => 'Captcha error! try again later or contact site admin.',
        ]);

        if( $request->waktu > '07:30:00' && $request->waktu < '16:00:00'){

             $notifikasi = 'Terima kasih, permintaan layanan peminjaman akun zoom berhasil dikirim.'.urldecode('%0D%0A').'Mohon ditunggu notifikasi berikutnya. '. urldecode('%0D%0A%0D%0A'.'%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60%20');
             
        } else {
            $notifikasi ='Terima kasih, '.urldecode('%2A').'permintaan layanan peminjaman akun zoom'.urldecode('%2A').' berhasil dikirim. Saat ini kami sedang tidak bertugas, pesan Anda akan segera kami balas saat jam kerja.'.urldecode('%0D%0A%0D%0A').
             'Senin-Kamis : 07.30 - 16.00 WIB'.
             urldecode('%0D%0A').
             'Jumat : 07.30 - 11.00 WIB'.
             urldecode('%0D%0A%0D%0A%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60')
             ;
        }

        $nohape = $request->no_hp;

        if($request->hasFile('file_name')){
            $files = $request->file('file_name');
            $prefix = date('Ymdhis');
            $extension = $files->getClientOriginalExtension();
            $filename = $prefix.'.'.$extension;
            $request->file('file_name')->move(public_path('uploads/layanan'), $filename);

             Zoom::create([
                'nama_opd' => $request->nama_opd,
                'peminjam' => $request->peminjam,
                'no_hp' => $request->no_hp,
                'topik' => $request->topik,
                'tanggal' => $request->tanggal,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'peserta' => $request->peserta,
                'file_name' => $filename,
                'status_st' => $request->status_st,

            ]);

             $notif = urldecode('%2APermintaan+Link+Zoom%2A%0D%0AOPD+%3A+' .  ucwords($request->nama_opd) . '%0D%0ANama+%3A+' .  ucwords($request->peminjam) . '%0D%0ATopik+%3A+' .  ucwords($request->topik) . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AJam+%3A+' . $request->jam_mulai . '-'. $request->jam_selesai  .' WIB'. '%0D%0AAkun+Zoom+%3A+' . $request->peserta .'%0D%0A'.'Lampiran : ('.html_entity_decode('&#8730;'). ')');

        } else {

           Zoom::create([
                'nama_opd' => $request->nama_opd,
                'peminjam' => $request->peminjam,
                'no_hp' => $request->no_hp,
                'topik' => $request->topik,
                'tanggal' => $request->tanggal,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'peserta' => $request->peserta,
                'status_st' => $request->status_st,
            ]);

             $notif = urldecode('%2APermintaan+Link+Zoom%2A%0D%0AOPD+%3A+' .  ucwords($request->nama_opd) . '%0D%0ANama+%3A+' .  ucwords($request->peminjam) . '%0D%0ATopik+%3A+' .  ucwords($request->topik) . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AJam+%3A+' . $request->jam_mulai . '-'. $request->jam_selesai  .' WIB'. '%0D%0AAkun+Zoom+%3A+' . $request->peserta .'%0D%0ALampiran%3A+(%C3%97)');

        }
       
        $this->notification($nohape, $notifikasi);
        $this->sendGroupWA($notif);
        $this->notificationStakeholder($notif);


        return redirect(route('perijinan:zoom.index'))->with('status','oke');

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

    public function getZoom(Request $request)
    {
            $data = Zoom::with(['status'])->whereDate('tanggal', '>=', date(Carbon::now()->format('Y-m-d')));
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action',
                    function ($data) {
                        if ($data->link_zoom != null) {
                         $actionBtn =  "<div class='d-flex justify-content-center'>
                            <a 
                            data-toggle='modal' 
                            data-target='#modalZoomLink' 
                            data-modal-effect='blur' 
                            data-topik_zoom='".$data->topik."' 
                            data-link_zoom='".$data->link_zoom."'
                            data-hape='".$data->no_hp."'
                            class='badge badge-primary btn-linkzoom' href='#modalZoomLink'>Lihat Link</a>
                        </div>";
                        return $actionBtn;
                    } else {
                        return ' <div class=" d-flex justify-content-center">-</div>';
                    }

                    }
                )
                 ->addColumn('tanggal-zoom', function ($a) {
                    return \Carbon\Carbon::createFromTimeStamp(strtotime($a->tanggal))->isoFormat('D MMMM Y');
                })

                 ->addColumn('jam_mulai', function ($a) {
                    return Carbon::createFromFormat('H:i:s',$a->jam_mulai)->format('H:i').' - '.Carbon::createFromFormat('H:i:s',$a->jam_selesai)->format('H:i') .' WIB ';
                })

                ->editColumn('status_st', function($a){
                   if($a->status->code_cd == 'STATUS_ST_01' ){
                        return '<span class="badge badge-pill badge-secondary">Menunggu persetujuan</span>';
                    } else if ($a->status->code_cd == 'STATUS_ST_02' ){
                        return '<span class="badge badge-pill badge-success">Disetujui</span>';
                    } else {
                        return '<span class="badge badge-pill badge-danger">Ditolak</span>';
                    }
                })
                
                ->rawColumns(['link_zoom', 'action', 'status_st'])
                ->make(true);
    }

    public function getDataZoom(Request $request)
    {
       return $data = Zoom::find($request->id);
    }

    public function notification($nohape, $notifikasi)
    {
        Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => $nohape,
            'message' => $notifikasi,
        ]);
    }

    public function sendGroupWA($notif)
    {
        $notif = Http::asForm()->post('http://10.0.1.21:8000/send-group-message', [
            
                'name' => 'DC Team',
                'message' => $notif,
        ]);
    
    }

    public function notificationStakeholder($notif)
    {
        Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => '081329585110', //Pak Fahmi
            'message' => $notif,
        ]);

        Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => '08122513172', // Bu Win
            'message' => $notif,
        ]);
    
    }

    
}
