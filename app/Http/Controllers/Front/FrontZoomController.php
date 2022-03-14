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

        Zoom::create([
            'nama_opd' => $request->nama_opd,
            'peminjam' => $request->peminjam,
            'no_hp' => $request->no_hp,
            'topik' => $request->topik,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'peserta' => $request->peserta,
        ]);

        $nohape = $request->no_hp;
        $link = urldecode('%2APermintaan+Link+Zoom%2A%0D%0AOPD+%3A+' . $request->nama_opd . '%0D%0ANama+%3A+' . $request->peminjam . '%0D%0ATopik+%3A+' . $request->topik . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('D MMMM Y') . '%0D%0AJam+%3A+' . $request->jam_mulai . '-'. $request->jam_selesai  . '%0D%0AAkun+Zoom+%3A+' . $request->peserta);
        $this->notification($nohape);
        // $this->sendGroupWA($link);

        

        return redirect(route('permintaan:zoom.index'))->with('status','oke');


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
            $data = Zoom::whereDate('tanggal', '>=', date(Carbon::now()));
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                   <a data-toggle="modal" data-target="#modalZoomLink" data-modal-effect="blur" data-topik_zoom="'.$data->topik.'" data-link_zoom="'.$data->link_zoom.'
                    " data-hape="'.$data->no_hp.'" class="badge badge-primary btn-linkzoom" href="#modalZoomLink">Lihat Link</a>
                                    </div>';
                        return $actionBtn;
                    }
                )
                 ->addColumn('tanggal-zoom', function ($a) {
                    return \Carbon\Carbon::createFromTimeStamp(strtotime($a->tanggal))->isoFormat('D MMMM Y');
                })
                 ->addColumn('jam_mulai', function ($a) {
                    return $a->jam_mulai.' - '.$a->jam_selesai.' WIB';
                })
                // ->addColumn('link_zoom', function ($a) {
                //     if ($a->link_zoom != null) {
                //         $btnLinkZoom = "
                //         <div class='list-icons d-flex justify-content-center'>
                //         <a href='#modal_default' data-topik_zoom='" . $a->topik . "' data-link_zoom='" . $a->link_zoom . "' data-toggle='modal' data-target='#modal_default' class='badge badge-primary btn-linkzoom' style='color=white;'>Lihat Link</a>
                //     </div>";
                //         return $btnLinkZoom;
                //     } else {
                //         return '-';
                //     }
                // })
                ->rawColumns(['link_zoom', 'action'])
                ->make(true);
    }

      public function notification($nohape, $link = 'Mohon ditunggu, permintaan link zoom Anda sedang diproses...')
    {

        $response = Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => $nohape,
            'message' => $link,
        ]);

    }
    
    public function getDataZoom(Request $request)
    {
       return $data = Zoom::find($request->id);
    }

    public function sendGroupWA($link)
    {
        $client = new \GuzzleHttp\Client();
        if (request()->secure()) {
            $notif = $client->request('POST', 'http://10.0.1.21:8000/send-group-message', [
                'form_params' => [
                    'name' => 'DC Team',
                    'message' => $link,
                ]
            ]);
        } else {
            $url = 'http://10.0.1.21:8000';
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
            curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            $output = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            // echo 'HTTP code: ' . $httpcode;
            if ($httpcode != 0) {
                $notif = $client->request('POST', 'http://10.0.1.21:8000/send-group-message', [
                    'form_params' => [
                        'name' => 'Ujicobabotwa',
                        'message' => $link,
                    ]
                ]);
            } else {
                return true;
            }
        }
        return $notif;
    }

    
}
