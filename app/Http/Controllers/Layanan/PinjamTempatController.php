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

            $data = PinjamTempat::with(['status'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                 ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('pinjam-tempat.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                    <a href="'.route('pinjam-tempat.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
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

            $data = PinjamTempat::with(['status'])->whereDate('tanggal', '>=', date(Carbon::now()->format('Y-m-d')));

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
            $filename = $prefix.$extension;
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

             $notif = urldecode('%2APinjam+Tempat+Rapat%2A%0D%0AInstitusi+/+lembaga+%3A+' .  ucwords($request->instansi) . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AWaktu+%3A+' . $request->waktu .  ' WIB'.'%0D%0AAcara%3A+' . $acara . '%0D%0AJumlah+peserta++%3A+' . $request->peserta .'%0D%0ANomor+telepon+%3A+' . $request->cp .'%0D%0ALampiran%3A+&#8730;');

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

             $notif = urldecode('%2APinjam+Tempat+Rapat%2A%0D%0AInstitusi+/+lembaga+%3A+' .  ucwords($request->instansi) . '%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0ATanggal+%3A+' . \Carbon\Carbon::createFromTimeStamp(strtotime($request->tanggal))->isoFormat('dddd, D MMMM Y') . '%0D%0AWaktu+%3A+' . $request->waktu .  ' WIB'.'%0D%0AAcara%3A+' . $acara . '%0D%0AJumlah+peserta++%3A+' . $request->peserta .'%0D%0ANomor+telepon+%3A+' . $request->cp .'%0D%0ALampiran%3A+%D7;');
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
