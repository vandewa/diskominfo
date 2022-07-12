<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Models\Presensi;
use DB;

class PresensiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = DB::

        $a = Presensi::with('nama')->get();

        $list=array();
        $month = 12;
        $year = 2014;

        for($d=1; $d<=31; $d++)
        {
            $time=mktime(12, 0, 0, $month, $d, $year);          
            if (date('m', $time)==$month)       
                $list[]=date('Y-m-d', $time);
        }
        return $list;

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
