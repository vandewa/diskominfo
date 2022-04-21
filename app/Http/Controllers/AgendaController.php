<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\User;
use Session;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public $botTele = 'bot2110552489:AAFPRxSbkJtY06IVLKcU44GKVcnz3pm4NUM';
    // // uji coba grup tele
    public $chatIdTeleDev = '1343623060';
    // // id grup aim tele
    public $chatIdTeleGrup = '-697674877';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Agenda::with(['user', 'oleh'])->select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = 
                            '<div class="list-icons">
                                <a href="'.route('agenda:harian.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                                <a href="'.route('agenda:harian.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                            </div>';
                        return $actionBtn;
                    }
                )->addColumn('tanggal', function ($a) {
                    if ($a->tanggalBerangkat == $a->tanggalPulang) {
                        return \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggalPulang)->isoFormat('dddd, D MMMM Y');
                    } else {
                        return \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggalBerangkat)->isoFormat('dddd, D MMMM Y') . ' - ' . \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggalPulang)->isoFormat('dddd, D MMMM Y');
                    }
                })
                ->make(true);
        }
        return view('agenda.index');
    }


    public function front(Request $request)
    {
      if ($request->ajax()) {
            $data = Agenda::with(['user', 'oleh'])->whereDate('tanggalBerangkat', '>=', date(Carbon::now()->format('Y-m-d')));
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
                )
                ->addColumn('tanggal', function ($a) {
                    if ($a->tanggalBerangkat == $a->tanggalPulang) {
                        return \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggalPulang)->isoFormat('dddd, D MMMM Y');
                    } else {
                        return \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggalBerangkat)->isoFormat('dddd, D MMMM Y') . ' - ' . \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggalPulang)->isoFormat('dddd, D MMMM Y');
                    }
                })
                 ->addColumn('jamMulai', function ($a) {
                   return \Carbon\Carbon::createFromFormat('H:i:s',$a->jamMulai)->format('H:i').' WIB';
                })
                ->make(true);
        }

        return view('agenda.index_front');

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
        $string3 = $request->tanggalBerangkat;
        $string4 = $request->tanggalPulang;

        // $validated = $request->validate([
        //     'nama_id' => 'required',
        //     'tanggal' => 'required',
        //     'acara' => 'required',
        //     'tempat' => 'required',
        //     'jamMulai' => 'required',
        //     'keterangan' => 'required'
        // ]);
        if ($string3 == $string4) {
            $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nJam Mulai : <b>") . $request->post('jamMulai') . ' WIB' . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        } else {
            $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . " - " . \Carbon\Carbon::createFromFormat('d/m/Y', $string4)->isoFormat('dddd, D MMMM Y') . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nJam Mulai : <b>") . $request->post('jamMulai') . ' WIB' . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        }

        //  if (request()->secure()) {
            $url = 'https://api.telegram.org/' . $this->botTele . '/sendMessage?chat_id=' . $this->chatIdTeleGrup . '&text=' . $pesan . '&parse_mode=html';
        // } else {
        //     $url = 'https://api.telegram.org/' . $this->botTele . '/sendMessage?chat_id=' . $this->chatIdTeleDev . '&text=' . $pesan . '&parse_mode=html';
        // }
        // $response = file_get_contents($url, true);
        $response = json_decode(file_get_contents($url));

        if ($response->ok) {
            $message_id = $response->result->message_id;
            Agenda::create([
                'nama_id' =>  $username->id,
                'tanggalBerangkat' => Carbon::createFromFormat('d/m/Y', $request->tanggalBerangkat)->format('Y-m-d'),
                'tanggalPulang' => Carbon::createFromFormat('d/m/Y', $request->tanggalPulang)->format('Y-m-d'),
                'acara' => $request->acara,
                'tempat' => $request->tempat,
                'keterangan' => $request->keterangan,
                'jamMulai' => $request->jamMulai,
                'oleh' => auth()->user()->id,
                'message_id' => $message_id,
            ]);
        }


        // $this->kirim($pesan, $validated, $string3, $string4);
        return redirect(route('agenda:harian.index'));
    }

    // public function kirim($pesan, $validated, $string3, $string4)
    // {
    //     if (request()->secure()) {
    //         $url = 'https://api.telegram.org/' . $this->botTele . '/sendMessage?chat_id=' . $this->chatIdTeleGrup . '&text=' . $pesan . '&parse_mode=html';
    //     } else {
    //         $url = 'https://api.telegram.org/' . $this->botTele . '/sendMessage?chat_id=' . $this->chatIdTeleDev . '&text=' . $pesan . '&parse_mode=html';
    //     }
    //     // $response = file_get_contents($url, true);
    //     $response = json_decode(file_get_contents($url));

    //     if ($response->ok) {
    //         $string3 = substr($tgl, 0, 10);
    //         $string4 = substr($tgl, 13, 24);
    //         $tgl3 = date('Y/m/d', strtotime($string3));
    //         $tgl4 = date('Y/m/d', strtotime($string4));
    //         $message_id = $response->result->message_id;
    //         Agenda::create($validated + [
    //             'oleh' => auth()->user()->id,
    //             'tanggalBerangkat' => $tgl3,
    //             'tanggalPulang' => $tgl4,
    //             'tanggal' => $tgl3 . ' - ' . $tgl4,
    //             'message_id' => $message_id
    //         ]);
    //     }
    //     return $response;
    // }

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
    public function edit($id)
    {
        $user = User::orderBy('name', 'asc')->pluck('name', 'id');
        $data = Agenda::find($id);
        $tanggalBerangkat = Carbon::createFromFormat('Y-m-d', $data->tanggalBerangkat)->format('d/m/Y');
        $tanggalPulang = Carbon::createFromFormat('Y-m-d', $data->tanggalPulang)->format('d/m/Y');
        return view('agenda.edit', compact('data', 'user', 'tanggalBerangkat', 'tanggalPulang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $username = User::where('id', $request->post('nama_id'))->first();
        $string3 = $request->tanggalBerangkat;
        $string4 = $request->tanggalPulang;
        $msg_id = Agenda::find($id);

        if ($string3 == $string4) {
            $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nJam Mulai : <b>") . $request->post('jamMulai') . ' WIB' . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        } else {
            $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . " - " . \Carbon\Carbon::createFromFormat('d/m/Y', $string4)->isoFormat('dddd, D MMMM Y') . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nJam Mulai : <b>") . $request->post('jamMulai') . ' WIB' . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        }

        if (request()->secure()) {
            $url = 'https://api.telegram.org/' . $this->botTele .  "/editMessageText?chat_id=" . $this->chatIdTeleGrup . "&message_id=" . $msg_id->message_id . "&text=" . $pesan . '&parse_mode=html';
        } else {
            $url = 'https://api.telegram.org/' . $this->botTele .  "/editMessageText?chat_id=" . $this->chatIdTeleDev . "&message_id=" . $msg_id->message_id . "&text=" . $pesan . '&parse_mode=html';
        }
        $response = json_decode(file_get_contents($url));

        if ($response->ok) {
            $data = [
                'tanggalBerangkat' =>  Carbon::createFromFormat('d/m/Y', $request->tanggalBerangkat)->format('Y-m-d'),
                'tanggalPulang' =>  Carbon::createFromFormat('d/m/Y', $request->tanggalPulang)->format('Y-m-d'),
            ];
            Agenda::find($id)->update(
                $data +  $request->except(['_token']),
            );
        }
        return redirect()->route('agenda:harian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msg_id =  Agenda::where('id', $id)->first();
        if (request()->secure()) {
            $url = 'https://api.telegram.org/' . $this->botTele . '/deleteMessage?chat_id=' . $this->chatIdTeleGrup . '&message_id=' . $msg_id->message_id . '';
        } else {
            $url = 'https://api.telegram.org/' . $this->botTele . '/deleteMessage?chat_id=' . $this->chatIdTeleDev . '&message_id=' . $msg_id->message_id . '';
        }
        $response = json_decode(file_get_contents($url));
        $data = [
            Agenda::destroy($id)
        ];
        return $data;
    }
}
