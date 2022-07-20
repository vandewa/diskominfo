<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggal;
use Carbon\Carbon;
use DataTables;

class SettingTanggalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return Tanggal::where('keterangan', '!=', NULL)->get();
        if ($request->ajax()) {
            $data = Tanggal::where('keterangan', '!=', NULL);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = 
                        '<div class="list-icons">
                            <a href="'.route('setting-tanggal.destroy', $row->tanggal ).'" class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                        </div>';
                        return $actionBtn;
                })
                ->addColumn('tanggalnya', function ($a) {
                    return Carbon::createFromFormat('Y-m-d', $a->tanggal)->isoFormat('dddd, D MMMM Y');
                 
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('tanggal.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanggal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggal = Carbon::createFromFormat('d/m/Y', $request->tanggal)->format('Y-m-d');
        Tanggal::find($tanggal)
        ->update([
            'keterangan' => $request->keterangan,
        ]);

        return redirect ( route('setting-tanggal.index'))->with('status', 'Data tanggal berhasil ditambah.');
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
        Tanggal::find($id)
        ->update([
            'keterangan' => null,
        ]);
    }
}
