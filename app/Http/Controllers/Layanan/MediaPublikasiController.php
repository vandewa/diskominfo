<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediaPublikasi;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Http\Requests\MediaPublikasiStoreRequest;

class MediaPublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = MediaPublikasi::with(['status'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('media-publikasi.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                    <a href="'.route('media-publikasi.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->tanggal))->isoFormat('D MMMM Y');
                })
                ->editColumn('waktu', function ($a) {
                    return Carbon::createFromFormat('H:i:s',$a->waktu)->format('H:i').' WIB';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('perijinan.media-publikasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.media-publikasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nohape = $request->nomor;

        if($request->hasFile('file_name')){
            $files = $request->file('file_name');
            $prefix = date('Ymdhis');
            $extension = $files->getClientOriginalExtension();
            $filename = $prefix.$extension;
            $request->file('file_name')->move(public_path('uploads/layanan'), $filename);

            MediaPublikasi::create([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'informasi' => $request->informasi,
                'tujuan' => $request->tujuan,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'tempat' => $request->tempat,
                'cp' => $request->cp,
                'nomor' => $request->nomor,
                'status_st' => $request->status_st,
                'file_name' => $filename,
            ]);

               $notif = urldecode('%2APermintaan+Media+Publikasi%2A%0D%0AOPD+%3A+' .  ucwords($request->instansi) . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0ASekilas+data+dan+informasi+%3A+' .  ucwords($request->informasi) . '%0D%0AMaksud+tujuan+pembuatan+media+publikasi+%3A+' .  ucwords($request->tujuan). '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AWaktu+%3A+' . $request->waktu   .' WIB'.'%0D%0ATempat%3A+' . $request->tempat .'%0D%0AKontak+person+/+penanggungjawab+kegiatan+%3A+' . $request->cp .'%0D%0ANomor+telepon+%3A+' . $request->nomor .'%0D%0ALampiran%3A+&#8730;' );

        } else {

             MediaPublikasi::create([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'informasi' => $request->informasi,
                'tujuan' => $request->tujuan,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'tempat' => $request->tempat,
                'cp' => $request->cp,
                'nomor' => $request->nomor,
                'status_st' => $request->status_st,
            ]);

                $notif = urldecode('%2APermintaan+Media+Publikasi%2A%0D%0AOPD+%3A+' .  ucwords($request->instansi) . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0ASekilas+data+dan+informasi+%3A+' .  ucwords($request->informasi) . '%0D%0AMaksud+tujuan+pembuatan+media+publikasi+%3A+' .  ucwords($request->tujuan). '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AWaktu+%3A+' . $request->waktu   .' WIB'.'%0D%0ATempat%3A+' . $request->tempat .'%0D%0AKontak+person+/+penanggungjawab+kegiatan+%3A+' . $request->cp .'%0D%0ANomor+telepon+%3A+' . $request->nomor .'%0D%0ALampiran%3A+%D7;' );

        }
   
        // $this->notification($nohape);
        // $this->sendGroupWA($notif);

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
        $data = MediaPublikasi::find($id);
        $tanggal = Carbon::createFromFormat('Y-m-d', $data->tanggal)->format('d/m/Y');
        $alasan = $data->alasan;
        $lampiran = $data->file_name;
        return view('perijinan.media-publikasi.edit', compact('data', 'tanggal', 'alasan','lampiran'));
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
        MediaPublikasi::find($id)
        ->update([
            'nama' => $request->nama,
            'instansi' => $request->instansi,
            'informasi' => $request->informasi,
            'tujuan' => $request->tujuan,
            'tanggal' => Carbon::createFromFormat('d/m/Y', $request->tanggal)->format('Y-m-d'),
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'cp' => $request->cp,
            'nomor' => $request->nomor,
            'status_st' => $request->status_st,
            'alasan' => $request->alasan,
        ]);

        $nohape = $request->nomor;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Pembuatan Media Publikasi '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        } else {
           
            $notif = 'Status permintaan layanan Pembuatan Media Publikasi '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }
     
        $this->notification($nohape, $notif);
        $this->sendGroupWA($notif);
    
        return redirect()->route('media-publikasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MediaPublikasi::destroy($id);
    }

    public function notification($nohape, $notif = 'Terima kasih, permintaan layanan pembuatan media publikasi berhasil dikirim, mohon ditunggu notifikasi berikutnya. ')
    {

        $response = Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => $nohape,
            'message' => $notif,
        ]);

    }
    

    public function sendGroupWA($notif)
    {
        $response = Http::asForm()->post('http://10.0.1.21:8000/send-group-message', [
            'name' => 'DC Team',
            'message' => $notif,
        ]);
    
    }
}
