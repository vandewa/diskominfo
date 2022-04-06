<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\PermohonanAplikasi;

class PermohonanAplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = PermohonanAplikasi::with(['status'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('permohonan-aplikasi.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                    <a href="'.route('permohonan-aplikasi.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('perijinan.permohonan-aplikasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.permohonan-aplikasi.create');
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
            $filename = $prefix.'.'.$extension;
            $request->file('file_name')->move(public_path('uploads/layanan'), $filename);

            PermohonanAplikasi::create([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'nip' => $request->nip,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'latar_belakang' => $request->latar_belakang,
                'tujuan' => $request->tujuan,
                'status_st' => $request->status_st,
                'file_name' => $filename,
            ]);

             $notif = urldecode('%2APermohonan+Aplikasi%2A%0D%0ANama+Pemohon+%3A+' .$request->nama . '%0D%0AOPD+%3A+' .  $request->instansi . '%0D%0ANIP+%3A+' . $request->nip . '%0D%0ANomor+telepon+%3A+' .$request->nomor. '%0D%0AEmail+%3A+' . $request->email.'%0D%0ALatar+belakang+pembuatan+aplikasi+%3A+' . $request->latar_belakang . '%0D%0ATujuan+pembuatan+aplikasi+%3A+' . $request->tujuan.'%0D%0ALampiran%3A+&#8730;');

        } else {

             PermohonanAplikasi::create([
                'nama' => $request->nama,
                'instansi' => $request->instansi,
                'nip' => $request->nip,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'latar_belakang' => $request->latar_belakang,
                'tujuan' => $request->tujuan,
                'status_st' => $request->status_st,
            ]);

             $notif = urldecode('%2APermohonan+Aplikasi%2A%0D%0ANama+Pemohon+%3A+' .$request->nama . '%0D%0AOPD+%3A+' .  $request->instansi . '%0D%0ANIP+%3A+' . $request->nip . '%0D%0ANomor+telepon+%3A+' .$request->nomor. '%0D%0AEmail+%3A+' . $request->email.'%0D%0ALatar+belakang+pembuatan+aplikasi+%3A+' . $request->latar_belakang . '%0D%0ATujuan+pembuatan+aplikasi+%3A+' . $request->tujuan.'%0D%0ALampiran%3A+%D7;');

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
        $data = PermohonanAplikasi::find($id);
        $alasan = $data->alasan;
        $lampiran = $data->file_name;
        return view('perijinan.permohonan-aplikasi.edit', compact('data', 'alasan', 'lampiran'));
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
         PermohonanAplikasi::find($id)
        ->update([
            'nama' => $request->nama,
            'instansi' => $request->instansi,
            'nip' => $request->nip,
            'nomor' => $request->nomor,
            'email' => $request->email,
            'latar_belakang' => $request->latar_belakang,
            'tujuan' => $request->tujuan,
            'status_st' => $request->status_st,
            'alasan' => $request->alasan,
        ]);

        $nohape = $request->nomor;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Permohonan Aplikasi '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        } else {
           
            $notif = 'Status permintaan layanan Permohonan Aplikasi '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }
     
        // $this->notification($nohape, $notif);
        // $this->sendGroupWA($notif);
    
        return redirect()->route('permohonan-aplikasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PermohonanAplikasi::destroy($id);
    }

    public function notification($nohape, $notif = 'Terima kasih, permintaan layanan permohonan aplikasi berhasil dikirim, mohon ditunggu notifikasi berikutnya. ')
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
