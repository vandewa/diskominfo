<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use DataTables;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('komentar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Komentar $komentar)
    {
        $data = $komentar;
        $data->update([
            'status' => 1
        ]);

        return view('komentar.edit', compact('komentar'));
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
        //  Komentar::find($id)
        //  ->update([
        //         'nama' => $request->nama,
        //         'nomor' => $request->nomor,
        //         'email' => $request->email,
        //         'isi' => $request->isi
        //     ]);

        // return redirect('komentar')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Komentar::destroy($id);
    }

    public function getKomentar(Request $request)
    {
            $data = Komentar::orderBy('created_at', 'desc')->get();
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="'.route('komentar.edit', $data->id ).' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="'.route('komentar.destroy', $data->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    return $actionBtn;
                }
                )
                ->editColumn('created_at', function($data){
                    return \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('D MMMM Y');
                })
                 ->editColumn('nama', function($data){
                 $nama = $data->nama;
                 return $nama;
                })
                 ->editColumn('isi', function($data){
                 $isi = $data->isi;
                 return $isi;
                })
                 ->editColumn('status', function($data){
                 if($data->status == '1'){
                        return '<div class="d-flex justify-content-center"><i class="icon-checkmark2"></i></div>';
                    } else {
                        return '<i class="icon-cross3"></i>';
                    }
                })
                
                ->rawColumns(['action', 'status','link'])
                ->make(true);
        
    }
}
