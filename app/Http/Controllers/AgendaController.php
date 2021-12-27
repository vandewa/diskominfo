<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\User;
use Session;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Agenda::with(['user']);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="' . route('agenda:harian.edit', $data->id) . ' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="' . route('agenda:harian.destroy', $data->id) . ' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                        return $actionBtn;
                    }
                )->addColumn('tanggal', function ($a) {
                    if ($a->tanggalBerangkat == $a->tanggalPulang) {
                        return \Carbon\Carbon::createFromTimeStamp(strtotime($a->tanggalPulang))->isoFormat('D MMMM Y');
                    } else {
                        return \Carbon\Carbon::createFromTimeStamp(strtotime($a->tanggalBerangkat))->isoFormat('D MMMM Y') . ' - ' . \Carbon\Carbon::createFromTimeStamp(strtotime($a->tanggalPulang))->isoFormat('D MMMM Y');
                    }
                })
                ->make(true);
        }
        return view('agenda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::orderBy('name', 'asc')->pluck('name', 'id');
        return view('agenda.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username = User::where('id', $request->post('nama_id'))->first();
        $tgl = $request->post('tanggal');
        $string3 = substr($tgl, 0, 10);
        $string4 = substr($tgl, 13, 24);
        // $tgl3 = date('Y/m/d', strtotime($string3));
        // $tgl4 = date('Y/m/d', strtotime($string4));
        $validated = $request->validate([
            'nama_id' => 'required',
            'tanggal' => 'required',
            'acara' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required'
        ]);

        $telegrambot = 'bot2110552489:AAFPRxSbkJtY06IVLKcU44GKVcnz3pm4NUM';
        // id tele grup aim
        // $user = '-697674877';
        // id tele uji coba app
        $user = '1343623060';

        if ($string3 == $string4) {
            $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . $string3 . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        } else {
            $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . $string3 . " - " . $string4 . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        }
        // Agenda::create($validated + [
        //     'oleh' => auth()->user()->name,
        //     'tanggalBerangkat' => $tgl3,
        //     'tanggalPulang' => $tgl4,
        //     'tanggal' => $tgl3 . ' - ' . $tgl4,
        //     'message_id' => $this->kirim->response->result->message_id
        // ]);
        // Session::flash('keterangan', 'Data berhasil disimpan');
        $this->kirim($pesan, $telegrambot, $user, $validated, $tgl);
        return redirect(route('agenda:harian.index'));
    }

    public function kirim($pesan, $bot, $chat, $validated, $tgl)
    {
        $url = 'https://api.telegram.org/' . $bot . '/sendMessage?chat_id=' . $chat . '&text=' . $pesan . '&parse_mode=html';
        // $result = file_get_contents($url, true);

        // $url = "https://api.telegram.org/bot<BOT_API_KEY>/sendMessage?chat_id=$chatid&text=$message";

        $response = json_decode(file_get_contents($url));

        if ($response->ok) {
            $string3 = substr($tgl, 0, 10);
            $string4 = substr($tgl, 13, 24);
            $tgl3 = date('Y/m/d', strtotime($string3));
            $tgl4 = date('Y/m/d', strtotime($string4));
            $message_id = $response->result->message_id;
            Agenda::create($validated + [
                'oleh' => auth()->user()->name,
                'tanggalBerangkat' => $tgl3,
                'tanggalPulang' => $tgl4,
                'tanggal' => $tgl3 . ' - ' . $tgl4,
                'message_id' => $message_id
            ]);
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telegrambot = 'bot2110552489:AAFPRxSbkJtY06IVLKcU44GKVcnz3pm4NUM';
        // id tele grup aim
        // $user = '-697674877';
        // id tele uji coba app
        $user = '1343623060';
        $msg_id =  Agenda::where('id', $id)->first();

        $url = 'https://api.telegram.org/' . $telegrambot . '/deleteMessage?chat_id=' . $user . '&message_id=' . $msg_id->message_id . '';
        // $result = file_get_contents($url, true);

        $data = [
            Agenda::destroy($id),
            json_decode(file_get_contents($url))
        ];
        return $data;
    }
}
