<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Models\Presensi;
use DB;
use App\Models\User;
use PhpOffice\PhpWord\TemplateProcessor;


class PresensiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Presensi::with(['nama'])->select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = 
                        '<div class="list-icons">
                            <a href="'.route('presensi-admin.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                        </div>';
                        return $actionBtn;
                })
                ->addColumn('tanggalnya', function ($a) {
                    return \Carbon\Carbon::createFromFormat('Y-m-d', $a->tanggal)->isoFormat('dddd, D MMMM Y');
                 
                })
                ->addColumn('jamnya', function ($a) {
                    return Carbon::createFromFormat('H:i:s',$a->jam)->format('H:i').' WIB ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('presensi.indexAdmin');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $tahun = Presensi::select(DB::raw("year(tanggal) as tahun"))->distinct()->pluck('tahun', 'tahun');  
        $user = User::where('level', 6)->orderBy('name', 'asc')->pluck('name', 'id');
        $bulan = array(
                    '01' => "Januari",
                    '02' => "Februari",
                    '03' => "Maret",
                    '04' => "April",
                    '05' => "Mei",
                    '06' => "Juni",
                    '07' => "Juli",
                    '08' => "Agustus",
                    '09' => "September",
                    '10' => "Oktober",
                    '11' => "November",
                    '12' => "Desember",
                );

        return view('presensi.create', compact('tahun', 'user', 'bulan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = DB::table('presensi as a')
        ->select('*', 'a.jam as berangkat', 'b.jam as pulang')
        ->join('presensi as b',function($join) {
            $join->on('a.id_user','=','b.id_user')
            ->on('a.tanggal','=','b.tanggal')
            ->where('a.keterangan', '=', 'Masuk')
            ->where('b.keterangan', '=', 'Keluar');
            })
                ->whereYear('a.tanggal',$request->tahun)
                ->whereMonth('a.tanggal', $request->bulan)
                ->where('a.id_user', $request->id_user)
                ->orderBy('a.created_at', 'asc')
                ->get();

        $nama = Presensi::with(['nama'])
                ->whereYear('tanggal',$request->tahun)
                ->whereMonth('tanggal', $request->bulan)
                ->where('id_user', $request->id_user)
                ->orderBy('created_at', 'asc')
                ->first();
        
        if($nama->nama->opd == 'Informatika'){
            $nama_atasan = User::where('jabatan', 'Kepala Bidang Informatika Dinas Komunikasi Dan Informatika')
                                ->where('status', 1)
                                ->first()
                                ->name;
            $nip = User::where('jabatan', 'Kepala Bidang Informatika Dinas Komunikasi Dan Informatika')
                        ->where('status', 1)
                        ->first()
                        ->nip;
        } else if($nama->nama->opd == 'Informasi dan Komunikasi Publik'){
            $nama_atasan = User::where('jabatan', 'Kepala Bidang Informasi Dan Komunikasi Publik Dinas Komunikasi Dan Informatika')
                                ->where('status', 1)
                                ->first()
                                ->name;
            $nip = User::where('jabatan', 'Kepala Bidang Informasi Dan Komunikasi Publik Dinas Komunikasi Dan Informatika')
                        ->where('status', 1)
                        ->first()
                        ->nip;
        } else if($nama->nama->opd == 'Sekretariat'){
            $nama_atasan = User::where('jabatan', 'Kepala Sub Bagian Umum, Kepegawaian Dan Keuangan Sekretariat Dinas Komunikasi Dan Informatika')
                                ->where('status', 1)
                                ->first()
                                ->name;
            $nip = User::where('jabatan', 'Kepala Sub Bagian Umum, Kepegawaian Dan Keuangan Sekretariat Dinas Komunikasi Dan Informatika')
                        ->where('status', 1)
                        ->first()
                        ->nip;
        }

        $bulan = substr($nama->tanggal,5,2);
        $bulan_tahun = ($request->tahun.'-'.$request->bulan);

        $path = public_path('/template/form_absen.docx');
        $pathSave = storage_path('app/public/' . $nama->nama->name.'-'.$this->konversiTanggal($bulan).'-'.$request->tahun. '.docx');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'nama' => $nama->nama->name,
            'jabatan' => $nama->nama->jabatan,
            'nama_atasan' => $nama_atasan,
            'nip' => $nip,
            'bulan' => strtoupper(\Carbon\Carbon::createFromFormat('Y-m', $bulan_tahun)->isoFormat('MMMM Y')),
        ]);
        $kampret= [];
        foreach($data as $index => $a1){
                if($a1->keterangan == 'Masuk' || $a1->keterangan == 'Keluar' ){
                    $keterangan = '';
                }
                array_push($kampret, [ 
                    'no'=> $index+1, 
                    'tanggal' => \Carbon\Carbon::createFromFormat('Y-m-d', $a1->tanggal)->format('d/m/Y'), 
                    'keterangan' => $keterangan, 
                    'berangkat' => \Carbon\Carbon::createFromFormat('H:i:s',$a1->berangkat)->format('H:i').' WIB ', 
                    'pulang' =>\Carbon\Carbon::createFromFormat('H:i:s',$a1->pulang)->format('H:i').' WIB ']);
                    
        } 
        $templateProcessor->cloneRowAndSetValues('no', $kampret);
        $templateProcessor->saveAs($pathSave);

        return response()->download($pathSave, $nama->nama->name.'-'.$this->konversiTanggal($bulan).'-'.$request->tahun. '.docx')->deleteFileAfterSend(false);
    }

    private function konversiTanggal($bulan){
       switch ($bulan) {
                case "01":
                    return 'Januari';
                    break;
                case "02":
                    return 'Februari';
                    break;
                case "03":
                    return 'Maret';
                    break;
                case "04":
                    return 'April';
                    break;
                case "05":
                    return 'Mei';
                    break;
                case "06":
                    return 'Juni';
                    break;
                case "07":
                    return 'Juli';
                case "08":
                    return 'Agustus';
                    break;
                case "09":
                    return 'September';
                    break;
                case "10":
                    return 'Oktober';
                    break;
                case "11":
                    return 'November';
                    break;
                case "12":
                    return 'Desember';
                    break;
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
