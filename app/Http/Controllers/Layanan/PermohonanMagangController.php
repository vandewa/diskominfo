<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermohonanMagang;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class PermohonanMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = PermohonanMagang::with(['status'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                 ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('magang.show', $row->id ).'" class="btn btn-outline-primary rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                   <a href="'.route('magang.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                </div>';
                    })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('perijinan.magang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.magang.create');
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

        $nohape = $request->nomor;

         if($request->hasFile('file_name')){
            $files = $request->file('file_name');
            $prefix = date('Ymdhis');
            $extension = $files->getClientOriginalExtension();
            $filename = $prefix.'.'.$extension;
            $request->file('file_name')->move(public_path('uploads/layanan'), $filename);

            PermohonanMagang::create([
                'nama' => $request->nama,
                'asal' => $request->asal,
                'jurusan' => $request->jurusan,
                'lama_magang' => $request->lama_magang,
                'nomor_surat' => $request->nomor_surat,
                'nomor' => $request->nomor,
                'status_st' => $request->status_st,
                'file_name' => $filename,
            ]);

             $notif = urldecode('%2APermohonan+Magang%2A%0D%0AAsal+sekolah+/+PT+%3A+' .  $request->asal . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0AJurusan+%3A+' . $request->jurusan . '%0D%0ALama+magang+%3A+' . $request->lama_magang .'%0D%0ANomor+&+tgl+surat+pengantar+dari+sekolah+/+PT+%3A+' . $request->nomor_surat. '%0D%0ANomor+telepon+%3A+' . $request->nomor  .'%0D%0A'.'Lampiran : ('.html_entity_decode('&#8730;'). ')');


         } else {
               PermohonanMagang::create([
                'nama' => $request->nama,
                'asal' => $request->asal,
                'jurusan' => $request->jurusan,
                'lama_magang' => $request->lama_magang,
                'nomor_surat' => $request->nomor_surat,
                'nomor' => $request->nomor,
                'status_st' => $request->status_st,
            ]);

             $notif = urldecode('%2APermohonan+Magang%2A%0D%0AAsal+sekolah+/+PT+%3A+' .  $request->asal . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0AJurusan+%3A+' . $request->jurusan . '%0D%0ALama+magang+%3A+' . $request->lama_magang .'%0D%0ANomor+&+tgl+surat+pengantar+dari+sekolah+/+PT+%3A+' . $request->nomor_surat. '%0D%0ANomor+telepon+%3A+' . $request->nomor.'%0D%0ALampiran%3A+(%C3%97)');
         }

        $this->notification($nohape);
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
        $data = PermohonanMagang::find($id);
        $alasan = $data->alasan;
        $lampiran = $data->file_name;
        return view('perijinan.magang.edit', compact('data', 'alasan','lampiran'));
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
        PermohonanMagang::find($id)
        ->update([
                'nama' => $request->nama,
                'asal' => $request->asal,
                'jurusan' => $request->jurusan,
                'lama_magang' => $request->lama_magang,
                'nomor_surat' => $request->nomor_surat,
                'nomor' => $request->nomor,
                'status_st' => $request->status_st,
            ]);
        
        $nohape = $request->cp;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Permohonan Magang '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        } else {
           
            $notif = 'Status permintaan layanan Permohonan Magang '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }
     
        $this->notification($nohape, $notif);
        $this->sendGroupWA($notif);

        return redirect(route('magang.index'))->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PermohonanMagang::destroy($id);
    }

    public function notification($nohape)
    {

        $notif = 'Terima kasih, permintaan layanan permohonan magang berhasil dikirim.'.urldecode('%0D%0A').'Mohon ditunggu notifikasi berikutnya. '. urldecode('%0D%0A%0D%0A'.'%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60%20');

        $response = Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => $nohape,
            'message' => $notif,
        ]);

    }
    
    public function sendGroupWA($notif)
    {
        $response = Http::asForm()->post('http://10.0.1.21:8000/send-group-message', [
            'name' => 'Sekretariat Diskominfo',
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
