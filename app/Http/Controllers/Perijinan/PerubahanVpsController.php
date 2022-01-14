<?php

namespace App\Http\Controllers\Perijinan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PerubahanVps;
use Session;
use DataTables;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\PhpWord;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Mail\NotifikasiPerubahanVpsMail;



class PerubahanVpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if($request->ajax()){

            $data = PerubahanVps::with(['prosesor','hd','ram','aksesNonfisik','penanggungJawab','menyetujui','status'])->select('perubahan_vps.*');

            return DataTables::of($data)
                ->editColumn('created_at', function($a){
                   return $a->created_at->isoFormat('D MMMM Y H:m:s');
                })
                ->addColumn('action', function($row){

                return'<div class="list-icons">
                        <a href="'.route('perubahan-vps.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                        <a href="'.route('perubahan-vps.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                        </div>';
                    })
                ->make(true);
        }

        return view('perijinan.perubahan-vps.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('perijinan.perubahan-vps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = PerubahanVps::create($request->all());
            if($data){
                Session::flash('keterangan', 'Data berhasil di simpan');
            }

         // $response = Http::asForm()->post('http://10.0.1.21:8000/send-message', [
        //     'number' => $request->telepon,
        //     'message' => $request->name.' Anda telah berhasil mendaftar untuk perubahan vps',
        // ]);

        // return ['response' => $response->body(),
        //     'data' => $request->all()];

        Mail::to($request->email)->send(new NotifikasiPerubahanVpsMail($data));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PerubahanVps::with(['prosesor','hd','ram','aksesNonfisik','penanggungJawab','menyetujui','status'])->find($id);

        return view('perijinan.perubahan-vps.show', compact('data'));
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
     public function persetujuan(Request $request, $id)
    {
        $data = PerubahanVps::find($id)->update(
            [
                'aproval_id' => Auth::user()->id,
                'valid_util' => $request->valid_util,
                'approval_date' => date('Y-m-d H:i:s'),
                'penanggung_jawab_id' => $request->penanggung_jawab_id,
                'status_st' => $request->status_st
            ]
        );
        Session::flash('status','Data berhasil di update');
        return redirect(route('perubahan-vps.index'));
    }

    public function cetakSurat($id)
    {
        $data = PerubahanVps::with(['prosesor','hd','ram','aksesNonfisik','penanggungJawab', 'menyetujui', 'status'])->find($id);
        $path = public_path('/template/form_perubahan_vps.docx');
        $pathSave =storage_path('app/public/'.$data->no.'.docx');
        $pathPdf =    $pathSave =storage_path('app/public/'.$data->no.'.pdf');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'no' => $data->no,
            'nama' => $data->nama,
            'nip' => $data->nip,
            'instansi' => $data->instansi,
            'tujuan' => $data->tujuan,
            'so' => $data->so,
            'ip' => $data->ip,
            'hd' => $data->hd->code_nm??'',
            'ram' => $data->ram->code_nm??'',
            'prosesor' => $data->prosesor->code_nm??'',
            'aksesnonfisik' => $data->aksesNonfisik->code_nm??'',
            'tanggal' => \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('D MMMM Y'),
            'approval_date' => \Carbon\Carbon::createFromTimeStamp(strtotime($data->approval_date))->isoFormat('D MMMM Y'),
            'valid_until' => \Carbon\Carbon::createFromTimeStamp(strtotime($data->valid_util))->isoFormat('D MMMM Y'),
            'penanggung_jawab_nama' => $data->penanggungJawab->name,
            'penanggung_jawab_nip' => $data->penanggungJawab->nip,
            'penanggung_jawab_jabatan' => $data->penanggungJawab->jabatan,
            'penanggung_jawab_email' => $data->penanggungJawab->email,

        ]);

        $templateProcessor->saveAs($pathSave);
        // $converter = new OfficeConverter($pathSave);
        // $converter->convertTo('aaaa.pdf'); //generates pdf file in same directory as test-file.docx
//        $converter = new OfficeConverter('test-file.docx', 'path-to-outdir');
       return response()->download($pathSave,$data->no.'.docx')->deleteFileAfterSend(true);

    }

    
}
