<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PinjamPeralatan;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use NcJoes\OfficeConverter\OfficeConverter;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\File;
use App\Http\Requests\PinjamPeralatanStore;


class PinjamPeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = PinjamPeralatan::with(['status'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                 ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('pinjam-peralatan.show', $row->id ).'" class="btn btn-outline-primary rounded-round"><i class="icon-zoomin3 mr-2"></i>Detail</a>
                   <a href="'.route('pinjam-peralatan.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                </div>';
                    })
                ->addColumn('tanggalnya', function ($a) {
                    if ($a->tanggal_mulai == $a->tanggal_selesai) {
                        return \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggal_mulai)->isoFormat('dddd, D MMMM Y');
                    } else {
                        return \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggal_mulai)->isoFormat('dddd, D MMMM Y') . ' - ' . \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggal_selesai)->isoFormat('dddd, D MMMM Y');
                    }
                })

                ->editColumn('bukti', function ($a) {
                    if(!empty($a->bukti)){
                       return '<div class="d-flex justify-content-center"><i class="icon-checkmark2"></i></div>';
                    } else {
                        return '<i class="icon-cross3"></i>';
                    }
                })
               
                ->rawColumns(['action', 'bukti'])
                ->make(true);
        }

        return view('perijinan.pinjam-peralatan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.pinjam-peralatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $path = 'uploads/layanan';
        
        if (!file_exists($path)) {
              mkdir($path);
             }


        $request->validate([
            'captcha' => 'required|captcha',
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

                $a = PinjamPeralatan::create([
                    'no' => gen_pinjam_alat(),
                    'nama' => $request->nama,
                    'instansi' => $request->instansi,
                    'tanggal_mulai' => $request->tanggal_mulai,
                    'tanggal_selesai' => $request->tanggal_selesai,
                    'alat' => implode(' dan ', $request->alat),
                    'lama_pinjam' => $request->lama_pinjam,
                    'nomor' => $request->nomor,
                    'keterangan' => $request->keterangan,
                    'status_st' => $request->status_st,
                    'file_name' => $filename,
            ]);

             $notif = urldecode('%2APinjam+Peralatan%2A%0D%0AInstitusi+/+lembaga+%3A+' .  ucwords($request->instansi) . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0ADari+tanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal_mulai))->isoFormat('dddd, D MMMM Y') . '%0D%0ASampai+tanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal_selesai))->isoFormat('dddd, D MMMM Y') . '%0D%0AAlat+%3A+' .implode(' dan ', $request->alat) .'%0D%0ANomor+telepon+%3A+' . $request->nomor .'%0D%0A'.'Lampiran : ('.html_entity_decode('&#8730;'). ')');

         } else {

            // return implode(' dan ', $request->alat);

                $a = PinjamPeralatan::create([
                    'no' => gen_pinjam_alat(),
                    'nama' => $request->nama,
                    'instansi' => $request->instansi,
                    'tanggal_mulai' => $request->tanggal_mulai,
                    'tanggal_selesai' => $request->tanggal_selesai,
                    'alat' => implode(' dan ', $request->alat),
                    'lama_pinjam' => $request->lama_pinjam,
                    'nomor' => $request->nomor,
                    'keterangan' => $request->keterangan,
                    'status_st' => $request->status_st,
                ]);

             $notif = urldecode('%2APinjam+Peralatan%2A%0D%0AInstitusi+/+lembaga+%3A+' .  ucwords($request->instansi) . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0ADari+tanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal_mulai))->isoFormat('dddd, D MMMM Y') . '%0D%0ASampai+tanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal_selesai))->isoFormat('dddd, D MMMM Y') . '%0D%0AAlat+%3A+' .implode(' dan ', $request->alat) .'%0D%0ANomor+telepon+%3A+' . $request->nomor .'%0D%0ALampiran%3A+(%C3%97)');
         }

         $id_alat = $a->id;;
         $tiket = $a->no;


        $path = public_path('/template/surat_pernyataan_pinjam_barang.docx');
        $pathSave = public_path('/storage/surat-peminjaman-alat/Surat-Pernyataan-'.$tiket.'.docx');
        // $pathPdf =    $pathSave =storage_path('app/public/'.$data->no.'.pdf');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'no' => strtoupper($a->no),
            'nama' => strtoupper($a->nama),
            'nomor' => strtoupper($a->nomor),
            'instansi' => strtoupper($a->instansi),
            'alat' => strtoupper($a->alat),
            'tanggal' => strtoupper(\Carbon\Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y')),
            'tanggal_mulai' => strtoupper(\Carbon\Carbon::createFromTimeStamp(strtotime($a->tanggal_mulai))->isoFormat('D MMMM Y')),
            'tanggal_selesai' => strtoupper(\Carbon\Carbon::createFromTimeStamp(strtotime($a->tanggal_selesai))->isoFormat('D MMMM Y')),
            'tahun' => date('Y', strtotime($a->created_at))
        ]);

        $templateProcessor->saveAs(public_path('storage/surat-peminjaman-alat/Surat-Pernyataan-'.$tiket.'.docx'));
 

        //  return $notif;

        $this->notification($nohape, $tiket);
        $this->sendMedia($nohape, $tiket);
        $this->sendGroupWA($notif);
        $this->notificationStakeholder($notif);

      
        return redirect(route('pengajuanizin'))->with(['statuss' => 'oke', 'id_alat' => $id_alat]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $data = PinjamPeralatan::find($id);
        $tanggal_mulai = Carbon::createFromFormat('Y-m-d', $data->tanggal_mulai)->format('d/m/Y');
        $tanggal_selesai = Carbon::createFromFormat('Y-m-d', $data->tanggal_selesai)->format('d/m/Y');
        $alasan = $data->alasan;
        $lampiran = $data->file_name;
        $bukti = $data->bukti;
        return view('perijinan.pinjam-peralatan.edit', compact('data', 'tanggal_mulai', 'tanggal_selesai', 'alasan', 'lampiran', 'bukti'));
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

        PinjamPeralatan::find($id)
        ->update([
                // 'nama' => $request->nama,
                // 'instansi' => $request->instansi,
                // 'tanggal' => Carbon::createFromFormat('d/m/Y', $request->tanggal)->format('Y-m-d'),
                // 'alat' => $request->alat,
                // 'lama_pinjam' => $request->lama_pinjam,
                'nomor' => $request->nomor,
                'status_st' => $request->status_st,
                'alasan' => $request->alasan,
            ]);
        
        $nohape = $request->nomor;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Pinjam Peralatan '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        } else {
           
            $notif = 'Status permintaan layanan Pinjam Peralatan '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }

        $this->notificationUpdate($nohape, $notif);
        $this->sendGroupWA($notif);

        return redirect(route('pinjam-peralatan.index'))->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $oke = PinjamPeralatan::where('id',$id)->first();

        if(!empty($oke->bukti)) {
            $path =  public_path('uploads/bukti/'.$oke->bukti);
            File::delete($path);
        }

        if(!empty($oke->file_name)) {
            $paths =  public_path('uploads/layanan/'.$oke->file_name);
            File::delete($paths);
        }

        PinjamPeralatan::destroy($id);

    }

    public function notification($nohape, $tiket)
    {

        $notif = 'Terima kasih, permintaan layanan pinjam peralatan berhasil dikirim.'.urldecode('%0D%0A%0D%0A').
        
        'Mohon surat pernyataan yang sudah ditandatangani diupload pada :'.urldecode('%0D%0A%0D%0A').
        url('/pengajuanizin?q='.$tiket).urldecode('%0D%0A%0D%0A').
        
        'Download surat pernyataan dibawah ini :'.urldecode('%0D%0A').

        urldecode('%0D%0A%0D%0A'.'%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60%20');

        $response = Http::asForm()->post('http://10.0.1.21:8000/send-message', [
            'number' => $nohape,
            'message' => $notif,
        ]);

    }

    public function notificationUpdate($nohape, $notif)
    {

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

        $response2 = Http::asForm()->post('http://10.0.1.21:8000/send-group-message', [
            'name' => 'DC Team',
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
            'number' => '08122513172', //Bu Win
            'message' => $notif,
        ]);
    
    }

     public function sendMedia($nohape, $tiket)
    {
        Http::asForm()->post('http://10.0.1.21:8000/send-media', [
            'number' => $nohape, 
            'caption' => 'Surat Pernyataan '.$tiket, 
            'file' => url('/storage/surat-peminjaman-alat/Surat-Pernyataan-'.$tiket.'.docx'),
        ]);

    }

    public function cetakSurat($id_alat)
    {
       $data = PinjamPeralatan::find($id_alat);
        $path = public_path('/template/surat_pernyataan_pinjam_barang.docx');
        $pathSave = storage_path('app/public/'.'Surat-Pernyataan-'.$data->no.'.docx');
        $pathPdf =    $pathSave =storage_path('app/public/'.$data->no.'.pdf');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'no' => strtoupper($data->no),
            'nama' => strtoupper($data->nama),
            'nomor' => strtoupper($data->nomor),
            'instansi' => strtoupper($data->instansi),
            'alat' => strtoupper($data->alat),
            'tanggal' => strtoupper(\Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('D MMMM Y')),
            'tanggal_mulai' => strtoupper(\Carbon\Carbon::createFromTimeStamp(strtotime($data->tanggal_mulai))->isoFormat('D MMMM Y')),
            'tanggal_selesai' => strtoupper(\Carbon\Carbon::createFromTimeStamp(strtotime($data->tanggal_selesai))->isoFormat('D MMMM Y')),
            'tahun' => date('Y', strtotime($data->created_at))
        ]);

        $templateProcessor->saveAs($pathSave);

       return response()->download($pathSave,'Surat-Pernyataan-'.$data->no.'.docx')->deleteFileAfterSend(true);

    }
}
