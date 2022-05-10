<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PinjamTempat;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class PinjamTempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = PinjamTempat::with(['status', 'acara'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                 ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('pinjam-tempat.show', $row->id ).'" class="btn btn-outline-primary rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                   <a href="'.route('pinjam-tempat.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                </div>';
                    })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->tanggal))->isoFormat('D MMMM Y');
                })
                ->editColumn('waktu', function ($a) {
                    return Carbon::createFromFormat('H:i:s',$a->waktu)->format('H:i').' - selesai';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('perijinan.pinjam-tempat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->ajax()){

            $data = PinjamTempat::with(['status', 'acara'])->whereDate('tanggal', '>=', date(Carbon::now()->format('Y-m-d')));

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('status_st', function($a){
                   if($a->status->code_cd == 'STATUS_ST_01' ){
                        return '<span class="badge badge-pill badge-secondary">Menunggu persetujuan</span>';
                    } else if ($a->status->code_cd == 'STATUS_ST_02' ){
                        return '<span class="badge badge-pill badge-success">Disetujui</span>';
                    } else {
                        return '<span class="badge badge-pill badge-danger">Ditolak</span>';
                    }
                })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->tanggal))->isoFormat('D MMMM Y');
                })
                ->editColumn('waktu', function ($a) {
                    return Carbon::createFromFormat('H:i:s',$a->waktu)->format('H:i').' - selesai';
                })
                ->rawColumns(['status_st'])
                ->make(true);
        }

        return view('perijinan.pinjam-tempat.create');
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
            'captcha' => 'required|captcha',
        ],
        [
            'required' => 'Please verify that you are not a robot.',
            'captcha' => 'Captcha error! try again later or contact site admin.',
        ]);
        
        if($request->acara == 'ACARA_ST_01'){
            $acara = 'Daring';
        } else if ($request->acara == 'ACARA_ST_02') {
            $acara = 'Luring';
        } else {
            $acara = 'Hybrid';
        }

         $nohape = $request->cp;

         if($request->hasFile('file_name')){
            $files = $request->file('file_name');
            $prefix = date('Ymdhis');
            $extension = $files->getClientOriginalExtension();
            $filename = $prefix.'.'.$extension;
            $request->file('file_name')->move(public_path('uploads/layanan'), $filename);

            PinjamTempat::create([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'acara' => $request->acara,
                'peserta' => $request->peserta,
                'cp' => $request->cp,
                'status_st' => $request->status_st,
                'file_name' => $filename,
            ]);

             $notif = urldecode('%2APinjam+Tempat+Rapat%2A%0D%0AInstitusi+/+lembaga+%3A+' .  ucwords($request->instansi) . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AWaktu+%3A+' . $request->waktu .  ' WIB'.'%0D%0AAcara%3A+' . $acara . '%0D%0AJumlah+peserta++%3A+' . $request->peserta .'%0D%0ANomor+telepon+%3A+' . $request->cp .'%0D%0A'.'Lampiran : ('.html_entity_decode('&#8730;'). ')');

         } else {
               PinjamTempat::create([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'acara' => $request->acara,
                'peserta' => $request->peserta,
                'cp' => $request->cp,
                'status_st' => $request->status_st,
            ]);

             $notif = urldecode('%2APinjam+Tempat+Rapat%2A%0D%0AInstitusi+/+lembaga+%3A+' .  ucwords($request->instansi) . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AWaktu+%3A+' . $request->waktu .  ' WIB'.'%0D%0AAcara%3A+' . $acara . '%0D%0AJumlah+peserta++%3A+' . $request->peserta .'%0D%0ANomor+telepon+%3A+' . $request->cp .'%0D%0ALampiran%3A+(%C3%97)');
         }

        $this->notification($nohape);
        $this->sendGroupWA($notif);
        $this->notificationStakeholder($notif);

      
        return redirect(route('perijinan:pinjam.tempat.create'))->with('status','oke');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PinjamTempat::find($id);
        $tanggal = Carbon::createFromFormat('Y-m-d', $data->tanggal)->format('d/m/Y');
        $alasan = $data->alasan;
        $lampiran = $data->file_name;
        return view('perijinan.pinjam-tempat.edit', compact('data', 'tanggal', 'alasan', 'lampiran'));
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
        PinjamTempat::find($id)
        ->update([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'tanggal' => Carbon::createFromFormat('d/m/Y', $request->tanggal)->format('Y-m-d'),
                'waktu' => $request->waktu,
                'acara' => $request->acara,
                'peserta' => $request->peserta,
                'cp' => $request->cp,
                'status_st' => $request->status_st,
                'alasan' => $request->alasan,
            ]);
        
        $nohape = $request->cp;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Pinjam Tempat Rapat '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        } else {
           
            $notif = 'Status permintaan layanan Pinjam Tempat Rapat '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }
     
        $this->notification($nohape, $notif);
        $this->sendGroupWA($notif);

        return redirect(route('pinjam-tempat.index'))->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PinjamTempat::destroy($id);
    }

    public function notification($nohape)
    {

        $notif = 'Terima kasih, permintaan layanan pinjam tempat rapat berhasil dikirim.'.urldecode('%0D%0A').'Mohon ditunggu notifikasi berikutnya. '. urldecode('%0D%0A%0D%0A'.'%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60%20');

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
