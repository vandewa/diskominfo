<?php

namespace App\Http\Controllers\Perijinan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PengajuanServer;
use Illuminate\Support\Facades\Auth;
use Session;
use DataTables;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\PhpWord;


class PengajuanServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if($request->ajax()){

            $data = PengajuanServer::with(['status'])->select('pengajuan_servers.*');

            return DataTables::of($data)
                ->editColumn('created_at', function($a){
                   return $a->created_at->isoFormat('D MMMM Y H:m:s');
                })
                ->addColumn('action', function($row){

                return'<div class="list-icons">
                        <a href="'.route('pengajuan-server.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                        <a href="'.route('pengajuan-server.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                        </div>';
                    })
                ->make(true);
        }

        return view('perijinan.pengajuan-server.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.pengajuan-server.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = PengajuanServer::create($request->all());
        if($data){
            Session::flash('keterangan', 'Data berhasil di simpan');
        }

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
        $data = PengajuanServer::with(['status'])->find($id);

        return view('perijinan.pengajuan-server.show', compact('data'));
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
        $data = PengajuanServer::find($id)->update(
            [
                'aproval_id' => Auth::user()->id,
                'approval_date' => date('Y-m-d H:i:s'),
                'status_st' => $request->status_st
            ]
        );
        Session::flash('status','Data berhasil di update');
        return redirect(route('pengajuan-server.index'));
    }
        public function cetakSurat($id)
    {
        $data = PengajuanServer::with(['status'])->find($id);
        $path = public_path('/template/surat_pengajuan_server.docx');
        $pathSave =storage_path('app/public/'.$data->no.'.docx');
        $pathPdf =    $pathSave =storage_path('app/public/'.$data->no.'.pdf');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'no' => $data->no,
            'instansi' => $data->instansi,
            'nama_kadin' => $data->nama_kadin,
            'nip' => $data->nip,
            'keperluan' => $data->keperluan,
            'tujuan' => $data->tujuan,
            'nama_cp' => $data->nama_cp,
            'no_cp' => $data->no_cp,
            'tanggal' => \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('D MMMM Y'),
            'approval_date' => \Carbon\Carbon::createFromTimeStamp(strtotime($data->approval_date))->isoFormat('D MMMM Y'),
        ]);

        $templateProcessor->saveAs($pathSave);
        // $converter = new OfficeConverter($pathSave);
        // $converter->convertTo('aaaa.pdf'); //generates pdf file in same directory as test-file.docx
//        $converter = new OfficeConverter('test-file.docx', 'path-to-outdir');
       return response()->download($pathSave,$data->no.'.docx')->deleteFileAfterSend(true);

    }
}
