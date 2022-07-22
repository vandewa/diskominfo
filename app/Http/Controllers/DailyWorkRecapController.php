<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyWorkRecap;
use App\Models\User;
use App\Models\Tanggal;
use DataTables;
use Carbon\Carbon;
use DB;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Shared\Html;



class DailyWorkRecapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if($request->ajax()){

            if(auth()->user()->level == 6){
                $data = DailyWorkRecap::with(['nama'])->where('name', auth()->user()->id);
            } else  {
                $data = DailyWorkRecap::with(['nama'])->select('*');
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('daily-work-recap.show', $row->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-zoomin3 mr-2"></i>Detail</a>
                   <a href="'.route('daily-work-recap.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                </div>';
                    })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->date))->isoFormat('dddd, D MMMM Y');
                })
                ->editColumn('description', function ($a) {
                   return $a->description;
                })
    
                ->rawColumns(['action', 'description'])
                ->make(true);
        }

        return view('daily-work-recap.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daily-work-recap.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        DailyWorkRecap::create([
            'date' => Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d'),
            'description' => $request->description,
            'name' => $request->name,
            'output' => $request->output,
        ]);

        return redirect(route('daily-work-recap.index'))->with('status', 'Data berhasil ditambah');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DailyWorkRecap::find($id);
        $date = Carbon::createFromFormat('Y-m-d', $data->date)->format('d/m/Y');

        return view('daily-work-recap.edit', compact('data', 'date'));
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
        DailyWorkRecap::find($id)
        ->update([
            'date' => Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d'),
            'description' => $request->description,
            'name' => $request->name,
        ]);

       return redirect(route('daily-work-recap.index'))->with('status', 'Data berhasil diubah');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DailyWorkRecap::destroy($id);
    }

    public function cetakLKH()
    {
        $tahun = DailyWorkRecap::select(DB::raw("year(date) as tahun"))->distinct()->pluck('tahun', 'tahun');  
        $bulannya = DailyWorkRecap::select(DB::raw("LPAD(MONTH(date),2,'0') as bulan"))->orderBy('bulan', 'asc')->distinct()->pluck('bulan', 'bulan'); 
        $bulan = $bulannya->map(function ($date) {
        return Carbon::createFromFormat('m', $date)->isoFormat('MMMM');
        })->toArray(); 
        $user = User::where('level', 6)->orWhere('level', 8)->where('status', 1)->orderBy('name', 'asc')->pluck('name', 'id');

        return view('daily-work-recap.cetak', compact('tahun', 'bulan', 'user'));
    }

    public function storeLKH(Request $request)
    {
        $data = Tanggal::with(['lkh' => function($a) use($request) {
                            $a->where('name', $request->id_user);
                    }])
                    ->whereYear('tanggal',$request->tahun)
                    ->whereMonth('tanggal', $request->bulan)
                    ->get();

        $nama = User::where('id', $request->id_user)
                ->first();
        
        // return $nama;

        $bulan = substr($nama->date,5,2);
        $bulan_tahun = ($request->tahun.'-'.$request->bulan);

        $path = public_path('/template/form_lkh.docx');
        $pathSave = storage_path('app/public/' . 'LKH-'.$nama->name.'-'.$this->konversiTanggal($bulan).'-'.$request->tahun. '.docx');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'nama' => $nama->name,
            'jabatan' => $nama->jabatan,
            'bidang' => $nama->opd,
            'bulan' => strtoupper(Carbon::createFromFormat('Y-m', $bulan_tahun)->isoFormat('MMMM Y')),
        ]);
        $kampret= [];
        $keterangan = '';
        foreach($data as $index => $a1){

            if(date('w', strtotime($a1->tanggal)) == 6 or date('w', strtotime($a1->tanggal)) == 0){
                $keterangan = Carbon::createFromFormat('Y-m-d', $a1->tanggal)->isoFormat('dddd');
            }else {
                $keterangan = $a1->keterangan; 
            }

        array_push($kampret, [ 
            'no'=> $index+1, 
            'tanggal' => Carbon::createFromFormat('Y-m-d', $a1->tanggal)->format('d/m/Y'), 
            'keterangan' => $keterangan, 
            'kegiatan' => strip_tags($a1->lkh->description ?? ''),
        ]);
        
        } 
        
        $templateProcessor->cloneRowAndSetValues('no', $kampret);
        $templateProcessor->saveAs($pathSave);

        return response()->download($pathSave, 'LKH-'.$nama->name.'-'.$this->konversiTanggal($bulan).'-'.$request->tahun. '.docx')->deleteFileAfterSend(false);
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


}
