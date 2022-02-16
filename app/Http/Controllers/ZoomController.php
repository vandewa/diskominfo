<?php

namespace App\Http\Controllers;

use App\Models\Zoom;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ZoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Zoom::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="' . route('zoom:link_zoom.edit', $data->id) . ' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="' . route('zoom:link_zoom.destroy', $data->id) . ' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                        return $actionBtn;
                    }
                )
                ->addColumn('tanggal', function ($a) {
                    return \Carbon\Carbon::createFromTimeStamp(strtotime($a->tanggal))->isoFormat('D MMMM Y');
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
                ->rawColumns(['link_zoom', 'action'])
                ->make(true);
        }
        return view('zoom.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = User::orderBy('name', 'asc')->pluck('name', 'id');
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
        $validated = $request->validate(
            [
                'instansi' => 'required',
                'peminjam' => 'required',
                'no_hp' => 'required',
                'topik' => 'required',
                'tanggal' => 'required',
                'peserta' => 'required',
                'jam' => 'required'
            ],
            [
                'peserta.required' => 'Wajib dipilih',
            ]
        );
        $nohape = $request->input('no_hp');
        $link = urldecode('%2APermintaan+Link+Zoom%2A%0D%0AOPD+%3A+' . $request->input('instansi') . '%0D%0ANama+%3A+' . $request->input('peminjam') . '%0D%0ATopik+%3A+' . $request->input('topik') . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->input('tanggal')))->isoFormat('D MMMM Y') . '%0D%0AJam+%3A+' . $request->input('jam') . '%0D%0AAkun+Zoom+%3A+' . $request->input('peserta'));
        $this->notification($nohape);
        $this->sendGroupWA($link);
        Zoom::create($validated);
        return redirect(route('zoom:link_zoom.index'));
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
        return view('zoom.edit', compact('data'));
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
        Zoom::find($id)->update(
            $request->except(['_token']),
        );
        $nohape = $request->input('no_hp');
        $link = strip_tags($request->input('link_zoom'));
        $this->notification($nohape, $link);
        $this->sendGroupWA($link);
        return redirect()->route('zoom:link_zoom.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Zoom::destroy($id);
        return $data;
    }

    public function notification($nohape, $link = 'Permintaan Link Zoom anda sedang diproses...')
    {
        $client = new \GuzzleHttp\Client();
        if (request()->secure()) {
            $notif = $client->request('POST', 'http://10.0.1.21:8000/send-message', [
                'form_params' => [
                    'number' => $nohape,
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
                $notif = $client->request('POST', 'http://10.0.1.21:8000/send-message', [
                    'form_params' => [
                        'number' => '085643710007',
                        'message' => $link,
                    ]
                ]);
            } else {
                return true;
            }
        }
        return $notif;
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
