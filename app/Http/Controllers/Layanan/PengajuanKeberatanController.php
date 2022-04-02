<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengajuanKeberatan;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class PengajuanKeberatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = PengajuanKeberatan::with(['status'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('pengajuan-keberatan.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                    <a href="'.route('pengajuan-keberatan.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('perijinan.pengajuan-keberatan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('perijinan.pengajuan-keberatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            PengajuanKeberatan::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan, 
                'nomor' => $request->nomor,
                'email' => $request->email, 
                'nomor_pendaftaran' => $request->nomor_pendaftaran,
                'tujuan' => $request->tujuan, 
                'alasan_pengajuan' => $request->alasan_pengajuan,
                'kasus' => $request->kasus, 
                'status_st' => $request->status_st,
            ]);

            
            $notif = urldecode('%2APengajuan+Keberatan+Informasi+Publik+%2A%0D%0ANama+%3A+' .  ucwords($request->nama) . '%0D%0AAlamat+%3A+' .  ucwords($request->alamat) . '%0D%0APekerjaan+%3A+' . $request->informasi . '%0D%0AEmail+%3A+' . $request->email . '%0D%0ANomor+pendaftaran+permintaan+informasi+publik+%3A+' . $request->nomor_pendaftaran .'%0D%0ATujuan+penggunaan+informasi+publik+%3A+' . $request->tujuan . '%0D%0AAlasan+pengajuan+keberatan+%3A+' . $request->alasan_pengajuan .'%0D%0AKronologi+kasus+%3A+' . $request->kasus);

       
            $nohape = $request->nomor;
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
        $data = PengajuanKeberatan::find($id);
        $alasan = $data->alasan;
        return view('perijinan.pengajuan-keberatan.edit', compact('data', 'alasan'));
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
        PengajuanKeberatan::find($id)
        ->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan, 
            'nomor' => $request->nomor,
            'email' => $request->email, 
            'nomor_pendaftaran' => $request->nomor_pendaftaran,
            'tujuan' => $request->tujuan, 
            'alasan_pengajuan' => $request->alasan_pengajuan,
            'kasus' => $request->kasus, 
            'status_st' => $request->status_st,
            'alasan' => $request->alasan,
        ]);

        $nohape = $request->nomor;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Pengajuan Keberatan Informasi Publik '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        } else {
           
            $notif = 'Status permintaan layanan Pengajuan Keberatan Informasi Publik '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }
     
        // $this->notification($nohape, $notif);
        // $this->sendGroupWA($notif);
    
        return redirect()->route('pengajuan-keberatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PengajuanKeberatan::destroy($id);
    }

    public function notification($nohape, $notif = 'Terima kasih, permintaan layanan pengajuan keberatan informasi publik berhasil dikirim, mohon ditunggu notifikasi berikutnya. ')
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
