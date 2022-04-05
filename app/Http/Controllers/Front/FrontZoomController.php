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

        return $request->all();
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
        $link = urldecode('%2APermintaan+Link+Zoom%2A%0D%0AOPD+%3A+' .  ucwords($request->nama_opd) . '%0D%0ANama+%3A+' .  ucwords($request->peminjam) . '%0D%0ATopik+%3A+' .  ucwords($request->topik) . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AJam+%3A+' . $request->jam_mulai . '-'. $request->jam_selesai  .' WIB'. '%0D%0AAkun+Zoom+%3A+' . $request->peserta);
        // $this->notification($nohape);
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
            $data = Zoom::whereDate('tanggal', '>=', date(Carbon::now()->format('Y-m-d')));
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        if ($data->link_zoom != null) {
                         $actionBtn = '
                        <div class="list-icons d-flex justify-content-center">
                            <a data-toggle="modal" data-target="#modalZoomLink" data-modal-effect="blur" data-topik_zoom="'.$data->topik.'" data-link_zoom="'.$data->link_zoom.'" data-hape="'.$data->no_hp.'" class="badge badge-primary btn-linkzoom" href="#modalZoomLink">Lihat Link</a>
                        </div>';
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
            $notif = Http::asForm()->post('http://10.0.1.21:8000/send-group-message', [
               
                    'name' => 'DC Team',
                    'message' => $link,
            ]);
    
    }

    
}
