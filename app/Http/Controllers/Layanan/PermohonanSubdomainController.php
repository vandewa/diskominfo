<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\PermohonanSubdomain;


class PermohonanSubdomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = PermohonanSubdomain::with(['status', 'layanan', 'subdomain'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('permohonan-subdomain.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                    <a href="'.route('permohonan-subdomain.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->tanggal))->isoFormat('D MMMM Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('perijinan.subdomain.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perijinan.subdomain.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->jenislayanan_tp == 'JENISLAYANAN_TP_02'){
            $jenislayanan_tp = 'Layanan Sub Domain';
        } else if ($request->jenislayanan_tp == 'JENISLAYANAN_TP_03') {
            $jenislayanan_tp = 'Layanan Cpanel';
        } else {
            $jenislayanan_tp = 'Layanan Email';
        }

         $nohape = $request->nomor;

        if($request->hasFile('file_name')){
            $files = $request->file('file_name');
            $prefix = date('Ymdhis');
            $extension = $files->getClientOriginalExtension();
            $filename = $prefix.'.'.$extension;
            $request->file('file_name')->move(public_path('uploads/layanan'), $filename);

            PermohonanSubdomain::create([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'instansi' => $request->instansi,
                'bidang' => $request->bidang,
                'alamat' => $request->alamat,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'jenislayanan_tp' => $request->jenislayanan_tp,
                'nama_subdomain' => $request->nama_subdomain,
                'domain_st' => $request->domain_st,
                'nama_subdomain_cpanel' => $request->nama_subdomain_cpanel,
                'domain_st_cpanel' => $request->domain_st_cpanel,
                'hosting' => $request->hosting,
                'nama_email' => $request->nama_email,
                'status_st' => $request->status_st,
                'alasan' => $request->alasan,
                'file_name' => $request->file_name,
            ]);

             $notif = urldecode('%2APermohonan+Subdomain+%2A%0D%0ANama+%3A+' . $request->nama . '%0D%0AOPD+%3A+' .  $request->instansi . '%0D%0AJenis+layanan+%3A+' .  $jenislayanan_tp  .'%0D%0ALampiran%3A+&#8730;');

        } else {

            PermohonanSubdomain::create([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'instansi' => $request->instansi,
                'bidang' => $request->bidang,
                'alamat' => $request->alamat,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'jenislayanan_tp' => $request->jenislayanan_tp,
                'nama_subdomain' => $request->nama_subdomain,
                'domain_st' => $request->domain_st,
                'nama_subdomain_cpanel' => $request->nama_subdomain_cpanel,
                'domain_st_cpanel' => $request->domain_st_cpanel,
                'hosting' => $request->hosting,
                'nama_email' => $request->nama_email,
                'status_st' => $request->status_st,
                'alasan' => $request->alasan,
            ]);

             $notif = urldecode('%2APermohonan+Subdomain+%2A%0D%0ANama+%3A+' . $request->nama . '%0D%0AOPD+%3A+' .  $request->instansi . '%0D%0AJenis+layanan+%3A+' .  $jenislayanan_tp.'%0D%0ALampiran%3A+%D7;');

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
        $data = PermohonanSubdomain::find($id);
        $alasan = $data->alasan;
        $lampiran = $data->file_name;
        return view('perijinan.subdomain.edit', compact('data', 'alasan', 'lampiran'));
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
        PermohonanSubdomain::find($id)
        ->update([
            'nama' => $request->nama,
                'nip' => $request->nip,
                'instansi' => $request->instansi,
                'bidang' => $request->bidang,
                'alamat' => $request->alamat,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'jenislayanan_tp' => $request->jenislayanan_tp,
                'nama_subdomain' => $request->nama_subdomain,
                'domain_st' => $request->domain_st,
                'nama_subdomain_cpanel' => $request->nama_subdomain_cpanel,
                'domain_st_cpanel' => $request->domain_st_cpanel,
                'hosting' => $request->hosting,
                'nama_email' => $request->nama_email,
                'status_st' => $request->status_st,
                'alasan' => $request->alasan,
        ]);

        $nohape = $request->nomor;
        $status = \App\Models\ComCode::where('code_cd', $request->status_st)->first();
        if(isset($request->alasan)) {
            $notif = 'Status permintaan layanan Permohonan Subdomain '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.
                    '%0D%0A'.'( ' .$request->alasan . ' )' . '%0D%0A' .
                    '%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        } else {
           
            $notif = 'Status permintaan layanan Permohonan Subdomain '.urldecode('%0D%0A'.'%2A'.strtoupper($status->code_nm).'%2A'.'%0D%0A'.'%0D%0A'.'%C2%A9%20Diskominfo%20Wonosobo%20');
        }
     
        // $this->notification($nohape, $notif);
        // $this->sendGroupWA($notif);
    
        return redirect()->route('permohonan-subdomain.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PermohonanSubdomain::destroy($id);
    }

    public function notification($nohape, $notif = 'Terima kasih, permintaan layanan permohonan subdomain berhasil dikirim, mohon ditunggu notifikasi berikutnya. ')
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
