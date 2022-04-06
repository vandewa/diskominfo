<?php

namespace App\Http\Controllers;

use App\Models\Zoom;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class ZoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('zoom.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zoom.create');
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
            'tanggal' => Carbon::createFromFormat('d/m/Y', $request->tanggal)->format('Y-m-d'),
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'peserta' => $request->peserta,
            'link_zoom' => $request->link_zoom,
        ]);

        $nohape = $request->no_hp;
        $link = urldecode('%2APermintaan+Link+Zoom%2A%0D%0AOPD+%3A+' .  ucwords($request->nama_opd) . '%0D%0ANama+%3A+' .  ucwords($request->peminjam) . '%0D%0ATopik+%3A+' .  ucwords($request->topik) . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AJam+%3A+' . $request->jam_mulai . '-'. $request->jam_selesai  .' WIB'. '%0D%0AAkun+Zoom+%3A+' . $request->peserta);
        $this->notification($nohape);
        $this->sendGroupWA($link);

        if ($request->filled('link_zoom')){
            $nohape = $request->no_hp;
            $link = strip_tags($request->link_zoom);
            // $this->notification($nohape, $link);
            // $this->sendGroupWA($link);
        }

        return redirect(route('link_zoom.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function show(Zoom $zoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Zoom::find($id);
        $tanggal = Carbon::createFromFormat('Y-m-d', $data->tanggal)->format('d/m/Y');
        return view('zoom.edit', compact('data', 'tanggal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Zoom::find($id)
       ->update([
            'nama_opd' => $request->nama_opd,
            'peminjam' => $request->peminjam,
            'no_hp' => $request->no_hp,
            'topik' => $request->topik,
            'tanggal' => Carbon::createFromFormat('d/m/Y', $request->tanggal)->format('Y-m-d'),
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'peserta' => $request->peserta,
            'link_zoom' => $request->link_zoom,
        ]);

        $nohape = $request->no_hp;
        $link = strip_tags($request->link_zoom);
        // $this->notification($nohape, $link);
        // $this->sendGroupWA($link);

        return redirect()->route('link_zoom.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Zoom::destroy($id);

    }

    public function getZoom(Request $request)
    {
            $data = Zoom::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="' . route('link_zoom.edit', $data->id) . ' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="' . route('link_zoom.destroy', $data->id) . ' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                        return $actionBtn;
                    }
                )
                 ->addColumn('tanggal-buat', function ($a) {
                    return \Carbon\Carbon::createFromTimeStamp(strtotime($a->tanggal))->isoFormat('D MMMM Y');
                })
                 ->addColumn('jam_mulai', function ($a) {
                    return Carbon::createFromFormat('H:i:s',$a->jam_mulai)->format('H:i').' - '.Carbon::createFromFormat('H:i:s',$a->jam_selesai)->format('H:i') .' WIB ';
                })
                ->addColumn('link_zoom', function ($a) {
                    if ($a->link_zoom != null) {
                        $btnLinkZoom = "
                        <div class='list-icons d-flex justify-content-center'>
                        <a href='#modal_default' data-topik_zoom='" . $a->topik . "' data-link_zoom='" . $a->link_zoom . "' data-toggle='modal' data-target='#modal_default' class='badge badge-primary btn-linkzoom' style='color=white;'>Lihat Link</a>
                    </div>";
                        return $btnLinkZoom;
                    } else {
                        return '-';
                    }
                })
                ->editColumn('nama_opd', function($a){
                    return ucwords($a->nama_opd);
                })

                 ->editColumn('peminjam', function($a){
                    return ucwords($a->peminjam);
                })
                ->rawColumns(['link_zoom', 'action'])
                ->make(true);
    }

    public function notification($nohape, $link = 'Mohon ditunggu, permintaan link zoom Anda sedang diproses...')
    {
        
        $response = Http::asForm()->post('http://10.0.1.21:8000/send-message', [
        'number' => $nohape,
        'message' => $link
        ]);


    }

    public function sendGroupWA($link)
    {
        $notif = Http::asForm()->post('http://10.0.1.21:8000/send-group-message', [   
        'name' => 'DC Team',
        'message' => $link,
        ]);
    
    }
}
