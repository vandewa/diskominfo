<?php

namespace App\Http\Controllers\Tiket;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Session;
use Yajra\DataTables\DataTables;
use PhpOffice\PhpWord\PhpWord;
use Storage;
use NcJoes\OfficeConverter\OfficeConverter;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifikasiTiketMasuk;
use PhpOffice\PhpWord\IOFactory;
use setasign\Fpdi\Fpdi;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tiket::with(['prioritas', 'kategori', 'status', 'penerima', 'petugas'])->orderBy('created_at', 'desc');

            return DataTables::of($data)
                ->editColumn('deskripsi_masalah', function ($a) {
                    return  substr_replace($a->deskripsi_masalah, "...", 20);
                })
                ->addColumn('action', function ($a) {
                    return '<div class="list-icons">
                    <a href="' . route('tiket:tiket.edit', $a->id) . ' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="' . route('tiket:tiket.destroy', $a->id) . ' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                    <a href="' . route('tiket:tiket.show', $a->id) . ' " class="list-icons-item text-info"  data-popup="tooltip" title="Tambah Petugas Penyelesaian" data-placement="top" data-original-title="Top tooltip"><i class="icon-users4"></i></a>
                </div>';
                })
                ->rawColumns(['deskripsi_masalah', 'action'])
                ->make(true);
        }
        return view('tiket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Tiket::create(
            [
                'no' => gen_no_tiket(),
                'tiket_st' => 'TIKET_ST_01',
                'pelapor' => $request->pelapor,
                'priority_tp' => $request->priority_tp,
                'tiket_tp' => $request->tiket_tp,
                'penerima_id' => auth()->user()->id,
                'deskripsi_masalah' => $request->deskripsi_masalah,
                'email' => $request->email,
                'cp' => $request->cp,
                'instansi' => $request->instansi,

            ]
        );
        Session::flash('status', 'Tiket berhasil ditambahkan');
        Mail::to($request->email)->send(new NotifikasiTiketMasuk($data));
        return redirect(route('tiket:tiket.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Tiket::with(['prioritas', 'kategori', 'status', 'penerima', 'petugas'])->find($id);

        return view('tiket.show', compact('data'));
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

    public function storePenugasan(Request $request, $id)
    {
        if ($request->filled('petugas_penyelesaian_id')) {
            $data = Tiket::find($id)->update(
                [
                    'petugas_penyelesaian_id' => $request->petugas_penyelesaian_id,
                    'tiket_st' => 'TIKET_ST_02',
                ]
            );
            Session::flash('status', 'Petugas berhasil ditambahkan');
            return redirect()->back();
        } else {
            $data = Tiket::find($id)->update(
                [
                    'deskripsi_penyelesaian' => $request->deskripsi_penyelesaian,
                    'tiket_st' => 'TIKET_ST_03',
                    'tanggal_selesai' => date('Y-m-d H:i:s')
                ]
            );
            Session::flash('status', 'Tiket berhasil diselesaikan,');
        }

        return redirect(route('tiket:tiket.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tiket::destroy($id);

        return  $data;
    }

    public function cetakSuratTugas($id)
    {
    //    $exists = Storage::disk('public')->allFiles();

    //    return Storage::path('public\\TKT-22-05-001.docx');

        $data = Tiket::with(['prioritas', 'kategori', 'status', 'penerima', 'petugas'])->find($id);
        $path = public_path('/template/surat_tugas_tiket.docx');
        $pathSave = storage_path('app/public/' . $data->no . '.docx');
        // $pathPdf =    $pathSave = storage_path('app/public/' . $data->no . '.pdf');
        $pathPdf = storage_path('app/public/' . $data->no . '.pdf');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'no' => $data->no,
            'pelapor' => $data->pelapor,
            'instansi' => $data->instansi,
            'email' => $data->email,
            'telepon' => $data->cp,
            'petugas' => $data->petugas->name ?? '',
            'nip' => $data->petugas->nip ?? '',
            'jabatan' => $data->petugas->jabatan ?? '',
            'tanggal' => \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('D MMMM Y'),
            'tahun' => date('Y', strtotime($data->created_at))
        ]);

        $templateProcessor->saveAs($pathSave);

        return response()->download($pathSave, $data->no . '.docx')->deleteFileAfterSend(true);

        // $converter = new OfficeConverter(Storage::path('public\\TKT-22-05-001.docx'));
        
    //    new OfficeConverter( Storage::path('public\\TKT-22-05-001.docx'),Storage::path('public'));
        // $converter->convertTo(storage_path('app/public/aaaa.pdf')); //generates pdf file in same directory as test-file.docx

        // $nama = 'DEVAN DEWANANTA UYEEEE';
        // $outputfile = storage_path('app/public/tess.pdf');
        // $this->fillPDF(storage_path('app/public/tes.pdf'), $outputfile, $nama);

        // return response()->file($outputfile);
    }

    // public function fillPDF($file, $outputfile, $nama)
    // {
    //     $fpdi = new FPDI;
    //     $fpdi->setSourceFile($file);
    //     $template = $fpdi->importPage(1);
    //     $size = $fpdi->getTemplateSize($template);
    //     $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
    //     $fpdi->useTemplate($template);
    //     $top = 105;
    //     $right = 135;
    //     $name = $nama;
    //     $fpdi->SetFont("helvetica", "", 17);
    //     $fpdi->SetTextColor(25,26,25);
    //     $fpdi->Text($right, $top, $name);

    //     return $fpdi->Output($outputfile, 'F');

    // }



}
