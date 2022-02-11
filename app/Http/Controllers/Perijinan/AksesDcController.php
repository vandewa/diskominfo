<?php

namespace App\Http\Controllers\Perijinan;

use App\Http\Controllers\Controller;
use App\Models\AksesDc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DataTables;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\PhpWord;
use App\Mail\NotifikasiAksesDCMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class AksesDcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->ajax()){

            $data = AksesDc::with(['keperluan','jenisIdentitas', 'penanggungJawab','menyetujui','status'])->select('akses_dcs.*')->orderby('created_at','desc');

            return DataTables::of($data)
                ->editColumn('created_at', function($a){
                   return $a->created_at->isoFormat('D MMMM Y H:m:s');
                })
                ->addColumn('action', function($row){

                return'<div class="list-icons">
                        <a href="'.route('akses-data-center.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                        <a href="'.route('akses-data-center.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                        </div>';
                    })
                ->make(true);
        }

        return view('perijinan.akses-data-center.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.akses-data-center.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = AksesDc::create($request->all());
        if($data){
            Session::flash('keterangan', 'Data berhasil di simpan');
        }

        // $response = Http::asForm()->post('http://10.0.1.21:8000/send-message', [
        //     'number' => $request->telepon,
        //     'message' => $request->name.' Anda telah berhasil mendaftar untuk akses data center',
        // ]);

        // return ['response' => $response->body(),
        //     'data' => $request->all()];

        Mail::to($request->email)->send(new NotifikasiAksesDCMail($data));

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
        $data = AksesDc::with(['jenisIdentitas', 'penanggungJawab','menyetujui','status'])->find($id);

        return view('perijinan.akses-data-center.show', compact('data'));
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
        AksesDc::destroy($id);
    }

    public function persetujuan(Request $request, $id)
    {
        $data = AksesDc::find($id)->update(
            [
                'aproval_id' => Auth::user()->id,
                'valid_util' => $request->valid_util,
                'approval_date' => date('Y-m-d H:i:s'),
                'penanggung_jawab_id' => $request->penanggung_jawab_id,
                'status_st' => $request->status_st
            ]
        );
        Session::flash('status','Data berhasil di update');
        return redirect(route('akses-data-center.index'));
    }

    public function cetakSurat($id)
    {
       $data = AksesDc::with(['keperluan','jenisIdentitas', 'penanggungJawab','menyetujui','status'])->find($id);
        $path = public_path('/template/form_akses_dc.docx');
        $pathSave =storage_path('app/public/'.$data->no.'.docx');
        $pathPdf =    $pathSave =storage_path('app/public/'.$data->no.'.pdf');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'no' => $data->no,
            'keperluan' => $data->keperluan->code_nm??'',
            'name' => $data->name,
            'identity' => $data->jenisIdentitas->code_nm??'',
            'identity_no' => $data->identity_no,
            'asal_instansi' => $data->asal_instansi,
            'telepon' => $data->telepon,
            'email' => $data->email,
            'tanggal' => \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('D MMMM Y'),
            'approval_date' => \Carbon\Carbon::createFromTimeStamp(strtotime($data->approval_date))->isoFormat('D MMMM Y'),
            'valid_until' => \Carbon\Carbon::createFromTimeStamp(strtotime($data->valid_util))->isoFormat('D MMMM Y'),
        ]);

        $templateProcessor->saveAs($pathSave);
        // $converter = new OfficeConverter($pathSave);
        // $converter->convertTo('aaaa.pdf'); //generates pdf file in same directory as test-file.docx
//        $converter = new OfficeConverter('test-file.docx', 'path-to-outdir');
       return response()->download($pathSave,$data->no.'.docx')->deleteFileAfterSend(true);

    }
}
