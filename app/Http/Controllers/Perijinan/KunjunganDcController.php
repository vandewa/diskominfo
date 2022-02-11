<?php

namespace App\Http\Controllers\Perijinan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KunjunganDc;
use Illuminate\Support\Facades\Auth;
use Session;
use DataTables;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\PhpWord;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Mail\NotifikasiKunjunganDCMail;


class KunjunganDcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = KunjunganDc::with(['jenisIdentitas', 'penanggungJawab','menyetujui','status'])->select('ijin_kunjungans.*')->orderby('created_at','desc');

            return DataTables::of($data)
                ->editColumn('created_at', function($a){
                   return $a->created_at->isoFormat('D MMMM Y H:m:s');
                })
                ->addColumn('action', function($row){

                return'<div class="list-icons">
                        <a href="'.route('kunjungan-data-center.show', $row->id ).'" class="list-icons-item text-primary-600"><i class="icon-eye"></i></a>
                        <a href="'.route('kunjungan-data-center.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                        </div>';
                    })
                ->make(true);
        }

        return view('perijinan.kunjungan-data-center.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('perijinan.kunjungan-data-center.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = KunjunganDc::create($request->all());
        if($data){
            Session::flash('keterangan', 'Data berhasil di simpan');
        }

         // $response = Http::asForm()->post('http://10.0.1.21:8000/send-message', [
        //     'number' => $request->telepon,
        //     'message' => $request->name.' Anda telah berhasil mendaftar untuk kunjungan data center',
        // ]);

        // return ['response' => $response->body(),
        //     'data' => $request->all()];

        Mail::to($request->email)->send(new NotifikasiKunjunganDCMail($data));

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
        $data = KunjunganDc::with(['jenisIdentitas', 'penanggungJawab','menyetujui','status'])->find($id);

        return view('perijinan.kunjungan-data-center.show', compact('data'));
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
