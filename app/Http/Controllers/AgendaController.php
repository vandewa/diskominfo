<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\User;
use Session;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class AgendaController extends Controller
{
    public $botTele = 'bot2110552489:AAFPRxSbkJtY06IVLKcU44GKVcnz3pm4NUM';
    // uji coba grup tele
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
                                <a href="'.route('agenda:harian.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-zoomin3 mr-2"></i>Detail</a>
                                <a href="'.route('agenda:harian.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                            </div>';
                        return $actionBtn;
                    }
                )
                ->addColumn('jamMulai', function ($a) {
                   return \Carbon\Carbon::createFromFormat('H:i:s',$a->jamMulai)->format('H:i').' WIB';
                })
                ->addColumn('tanggal', function ($a) {
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
                            <div class=" ambil-data ">
                                <a data-toggle="modal" data-target="#modalZoomLink"  href="" class="badge badge-success">Lihat Surat</a>
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
                ->rawColumns(['action'])
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
        $user = User::where('status', 1)->orderBy('name', 'asc')->pluck('name', 'id');
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

        $path = 'uploads/agenda/';

        if (!file_exists($path)) {
              mkdir($path);
        }

                
        // $username = User::where('id', $request->post('nama_id'))->first();
        // $string3 = $request->tanggalBerangkat;
        // $string4 = $request->tanggalPulang;

        // if ($string3 == $string4) {
        //     $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nJam Mulai : <b>") . $request->post('jamMulai') . ' WIB' . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        // } else {
        //     $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . " - " . \Carbon\Carbon::createFromFormat('d/m/Y', $string4)->isoFormat('dddd, D MMMM Y') . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nJam Mulai : <b>") . $request->post('jamMulai') . ' WIB' . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        // }
       
        // $url = 'https://api.telegram.org/' . $this->botTele . '/sendMessage?chat_id=' . $this->chatIdTeleGrup . '&text=' . $pesan . '&parse_mode=html';
       
        // $response = json_decode(file_get_contents($url));

        // if ($response->ok) {
        //     $message_id = $response->result->message_id;
        //     Agenda::create([
        //         'nama_id' =>  $username->id,
        //         'tanggalBerangkat' => Carbon::createFromFormat('d/m/Y', $request->tanggalBerangkat)->format('Y-m-d'),
        //         'tanggalPulang' => Carbon::createFromFormat('d/m/Y', $request->tanggalPulang)->format('Y-m-d'),
        //         'acara' => $request->acara,
        //         'tempat' => $request->tempat,
        //         'keterangan' => $request->keterangan,
        //         'jamMulai' => $request->jamMulai,
        //         'oleh' => auth()->user()->id,
        //         'message_id' => $message_id,
        //     ]);
        // }

        // <!--- LEWAT TELEGRAM ----!>

        $username = User::where('id', $request->post('nama_id'))->first();
        $string3 = $request->tanggalBerangkat;
        $string4 = $request->tanggalPulang;

        $files = $request->file('surat');
        $prefix = date('Ymdhis');
        $by = $request->created_by;
        $extension = $files->extension();
        $filename = $prefix.'.'.$extension;
        $files->move(public_path($path), $filename);

        Agenda::create([
            'nama_id' =>  $username->id,
            'tanggalBerangkat' => Carbon::createFromFormat('d/m/Y', $request->tanggalBerangkat)->format('Y-m-d'),
            'tanggalPulang' => Carbon::createFromFormat('d/m/Y', $request->tanggalPulang)->format('Y-m-d'),
            'acara' => $request->acara,
            'tempat' => $request->tempat,
            'keterangan' => $request->keterangan,
            'jamMulai' => $request->jamMulai,
            'oleh' => auth()->user()->id,
            'message_id' => NULL,
            'surat' => $filename,
        ]);

        if ($string3 == $string4 && isset($request->keterangan)) {
            $pesan =    '*Agenda Diskominfo*' . urldecode('%0D%0A%0D%0A') .
                        'Nama : '. '*'. $username->name .'*' . urldecode('%0D%0A') .
                        'Acara : '. '*'. $request->acara . '*' . urldecode('%0D%0A') .
                        'Tanggal : '. '*'. \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . '*' . urldecode('%0D%0A') .
                        'Tempat : '. '*'.$request->tempat . '*' . urldecode('%0D%0A') .
                        'Jam Mulai : '. '*'.$request->jamMulai.' WIB*' . urldecode('%0D%0A') .
                        'Keterangan : '. '*'.$request->keterangan. '*'
                        ;
        } else if ($string3 == $string4 && !isset($request->keterangan)) {
           $pesan =    '*Agenda Diskominfo*' . urldecode('%0D%0A%0D%0A') .
                        'Nama : '. '*'. $username->name .'*' . urldecode('%0D%0A') .
                        'Acara : '. '*'. $request->acara . '*' . urldecode('%0D%0A') .
                        'Tanggal : '. '*'. \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . '*' . urldecode('%0D%0A') .
                        'Tempat : '. '*'.$request->tempat . '*' . urldecode('%0D%0A') .
                        'Jam Mulai : '. '*'.$request->jamMulai.' WIB*' . urldecode('%0D%0A') .
                        'Keterangan : *-*'
                        ;
        } else if ($string3 != $string4 && isset($request->keterangan)) {
             $pesan =    '*Agenda Diskominfo*' . urldecode('%0D%0A%0D%0A') .
                        'Nama : '. '*'. $username->name .'*' . urldecode('%0D%0A') .
                        'Acara : '. '*'. $request->acara . '*' . urldecode('%0D%0A') .
                        'Tanggal : '. '*'. \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM') .  '* *-* ' . '*' .\Carbon\Carbon::createFromFormat('d/m/Y', $string4)->isoFormat('dddd, D MMMM Y'). '*' .urldecode('%0D%0A') .
                        'Tempat : '. '*'.$request->tempat . '*' . urldecode('%0D%0A') .
                        'Jam Mulai : '. '*'.$request->jamMulai.' WIB*' . urldecode('%0D%0A') .
                        'Keterangan : '. '*'.$request->keterangan. '*'
                        ;

        } else if ($string3 != $string4 && !isset($request->keterangan)) {
             $pesan =    '*Agenda Diskominfo*' . urldecode('%0D%0A%0D%0A') .
                        'Nama : '. '*'. $username->name .'*' . urldecode('%0D%0A') .
                        'Acara : '. '*'. $request->acara . '*' . urldecode('%0D%0A') .
                        'Tanggal : '. '*'. \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM') .  '* *-* ' . '*' .\Carbon\Carbon::createFromFormat('d/m/Y', $string4)->isoFormat('dddd, D MMMM Y'). '*' .urldecode('%0D%0A') .
                        'Tempat : '. '*'.$request->tempat . '*' . urldecode('%0D%0A') .
                        'Jam Mulai : '. '*'.$request->jamMulai.' WIB*' . urldecode('%0D%0A') .
                        'Keterangan : *-*'
                        ;

        }

        $this->sendGroupWA($pesan);

        return redirect(route('agenda:harian.index'));
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
    public function edit($id)
    {
        $data = Agenda::find($id);
        $user = User::where('id', $data->nama_id)->first();
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
        // $username = User::where('id', $request->post('nama_id'))->first();
        // $string3 = $request->tanggalBerangkat;
        // $string4 = $request->tanggalPulang;
        // $msg_id = Agenda::find($id);

        // if ($string3 == $string4) {
        //     $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nJam Mulai : <b>") . $request->post('jamMulai') . ' WIB' . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        // } else {
        //     $pesan = "Nama : <b>" . $username->name . urlencode("</b>\nAcara : <b>") . $request->post('acara') . urlencode("</b>\nTanggal : <b>") . \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . " - " . \Carbon\Carbon::createFromFormat('d/m/Y', $string4)->isoFormat('dddd, D MMMM Y') . urlencode("</b>\nTempat : <b>") . $request->post('tempat') . urlencode("</b>\nJam Mulai : <b>") . $request->post('jamMulai') . ' WIB' . urlencode("</b>\nKeterangan : <b>") . $request->post('keterangan') . "</b>";
        // }

        // if (request()->secure()) {
        //     $url = 'https://api.telegram.org/' . $this->botTele .  "/editMessageText?chat_id=" . $this->chatIdTeleGrup . "&message_id=" . $msg_id->message_id . "&text=" . $pesan . '&parse_mode=html';
        // } else {
        //     $url = 'https://api.telegram.org/' . $this->botTele .  "/editMessageText?chat_id=" . $this->chatIdTeleDev . "&message_id=" . $msg_id->message_id . "&text=" . $pesan . '&parse_mode=html';
        // }
        
        // $response = json_decode(file_get_contents($url));

        // if ($response->ok) {
        //     $data = [
        //         'tanggalBerangkat' =>  Carbon::createFromFormat('d/m/Y', $request->tanggalBerangkat)->format('Y-m-d'),
        //         'tanggalPulang' =>  Carbon::createFromFormat('d/m/Y', $request->tanggalPulang)->format('Y-m-d'),
        //     ];
        //     Agenda::find($id)->update(
        //         $data +  $request->except(['_token']),
        //     );
        // }
        // <!--- LEWAT TELEGRAM ----!>

        $username = User::where('id', $request->nama_id)->first();
        $string3 = $request->tanggalBerangkat;
        $string4 = $request->tanggalPulang;

        $agenda = Agenda::find($id);

        // return $agenda->id;

        $berangkat = Carbon::createFromFormat('d/m/Y', $request->tanggalBerangkat)->format('Y-m-d');
        $pulang =  Carbon::createFromFormat('d/m/Y', $request->tanggalPulang)->format('Y-m-d');
        $jam = $request->jamMulai.':00';

        if($agenda->nama_id != $request->nama_id || $agenda->tanggalBerangkat != $berangkat || $agenda->tanggalPulang != $pulang || $agenda->acara != $request->acara || $agenda->tempat != $request->tempat || $agenda->keterangan != $request->keterangan || $agenda->jamMulai != $jam ){

                if ($string3 == $string4 && isset($request->keterangan)) {
                    $pesan =    '*Agenda Diskominfo Update*' . urldecode('%0D%0A%0D%0A') .
                                'Nama : '. '*'. $username->name .'*' . urldecode('%0D%0A') .
                                'Acara : '. '*'. $request->acara . '*' . urldecode('%0D%0A') .
                                'Tanggal : '. '*'. \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . '*' . urldecode('%0D%0A') .
                                'Tempat : '. '*'.$request->tempat . '*' . urldecode('%0D%0A') .
                                'Jam Mulai : '. '*'.$request->jamMulai.' WIB*' . urldecode('%0D%0A') .
                                'Keterangan : '. '*'.$request->keterangan. '*'
                                ;
                } else if ($string3 == $string4 && !isset($request->keterangan)) {
                $pesan =    '*Agenda Diskominfo Update*' . urldecode('%0D%0A%0D%0A') .
                                'Nama : '. '*'. $username->name .'*' . urldecode('%0D%0A') .
                                'Acara : '. '*'. $request->acara . '*' . urldecode('%0D%0A') .
                                'Tanggal : '. '*'. \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM Y') . '*' . urldecode('%0D%0A') .
                                'Tempat : '. '*'.$request->tempat . '*' . urldecode('%0D%0A') .
                                'Jam Mulai : '. '*'.$request->jamMulai.' WIB*' . urldecode('%0D%0A') .
                                'Keterangan : *-*'
                                ;
                } else if ($string3 != $string4 && isset($request->keterangan)) {
                    $pesan =    '*Agenda Diskominfo Update*' . urldecode('%0D%0A%0D%0A') .
                                'Nama : '. '*'. $username->name .'*' . urldecode('%0D%0A') .
                                'Acara : '. '*'. $request->acara . '*' . urldecode('%0D%0A') .
                                'Tanggal : '. '*'. \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM') .  '* *-* ' . '*' .\Carbon\Carbon::createFromFormat('d/m/Y', $string4)->isoFormat('dddd, D MMMM Y'). '*' .urldecode('%0D%0A') .
                                'Tempat : '. '*'.$request->tempat . '*' . urldecode('%0D%0A') .
                                'Jam Mulai : '. '*'.$request->jamMulai.' WIB*' . urldecode('%0D%0A') .
                                'Keterangan : '. '*'.$request->keterangan. '*'
                                ;

                } else if ($string3 != $string4 && !isset($request->keterangan)) {
                    $pesan =    '*Agenda Diskominfo Update*' . urldecode('%0D%0A%0D%0A') .
                                'Nama : '. '*'. $username->name .'*' . urldecode('%0D%0A') .
                                'Acara : '. '*'. $request->acara . '*' . urldecode('%0D%0A') .
                                'Tanggal : '. '*'. \Carbon\Carbon::createFromFormat('d/m/Y', $string3)->isoFormat('dddd, D MMMM') .  '* *-* ' . '*' .\Carbon\Carbon::createFromFormat('d/m/Y', $string4)->isoFormat('dddd, D MMMM Y'). '*' .urldecode('%0D%0A') .
                                'Tempat : '. '*'.$request->tempat . '*' . urldecode('%0D%0A') .
                                'Jam Mulai : '. '*'.$request->jamMulai.' WIB*' . urldecode('%0D%0A') .
                                'Keterangan : *-*'
                                ;

                }

                $this->sendGroupWA($pesan);
        } 

        Agenda::find($id)->update([
            // 'nama_id' =>  $username->id,
            'tanggalBerangkat' => Carbon::createFromFormat('d/m/Y', $request->tanggalBerangkat)->format('Y-m-d'),
            'tanggalPulang' => Carbon::createFromFormat('d/m/Y', $request->tanggalPulang)->format('Y-m-d'),
            'acara' => $request->acara,
            'tempat' => $request->tempat,
            'keterangan' => $request->keterangan,
            'jamMulai' => $request->jamMulai,
            'oleh' => auth()->user()->id,
        ]);

        if($request->hasFile('surat')){
            $files = $request->file('surat');
            $prefix = date('Ymdhis');
            $by = $request->created_by;
            $extension = $files->extension();
            $filename = $prefix.'.'.$extension;
            $files->move(public_path('uploads/agenda/'), $filename);

            Agenda::find($id)->update([
                'surat' => $filename
            ]);
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
        // $msg_id =  Agenda::where('id', $id)->first();

        // $url = 'https://api.telegram.org/' . $this->botTele . '/deleteMessage?chat_id=' . $this->chatIdTeleGrup . '&message_id=' . $msg_id->message_id . '';

        // $response = json_decode(file_get_contents($url));

        // HAPUS CHAT TELEGRAM
    
        Agenda::destroy($id);
        
    }

     public function sendGroupWA($pesan)
    {
        $pesan = Http::asForm()->post('http://10.0.1.21:8000/send-group-message', [
            
                'name' => 'DISKOMINFO',
                'message' => $pesan,
        ]);
    
    }



}
