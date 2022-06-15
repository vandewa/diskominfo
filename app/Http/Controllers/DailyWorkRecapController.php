<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyWorkRecap;
use DataTables;
use Carbon\Carbon;


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

            $data = DailyWorkRecap::with(['nama'])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return
                '<div class="list-icons">
                    <a href="'.route('daily-work-recap.show', $row->id ).'" class="btn btn-outline-primary rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
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
        DailyWorkRecap::create([
            'date' => Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d'),
            'description' => $request->description,
            'name' => $request->name,
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
}
