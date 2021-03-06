<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lampiran;
use DataTables;
use App\Http\Requests\LampirancreateValidation;
use App\Models\ComCode;
use Illuminate\Support\Facades\File; 

class LampiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        return view('lampiran.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $informasi = ComCode::where('code_group', 'INFORMASI_ST')
        ->get();

        return view('lampiran.create', compact('informasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $files = $request->file('nama_lampiran');

        $prefix = date('Ymdhis');
        $by = $request->created_by;
        $extension = $files->getClientOriginalExtension();
        $filename = $prefix.'_'. $by.'.'.$extension;

        $request->file('nama_lampiran')->move(public_path('uploads/lampiran'), $filename);
       
        Lampiran::create([
            'nama_lampiran' => $filename,
            'keterangan' => $request->keterangan,
            'informasi_st' => $request->informasi_st,
            'created_by' => $request->created_by
        ]);
    
        return redirect(route('lampirans.index'))->with('status', 'Data berhasil ditambahkan.');
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
        $lampiran = Lampiran::find($id);
        $informasi = ComCode::where('code_group', 'INFORMASI_ST')
        ->get();

        return view('lampiran.edit', compact('lampiran', 'informasi'));
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

        // return $request->all();

        Lampiran::find($id)
        ->update([
            'keterangan' => $request->keterangan,
            'informasi_st' => $request->informasi_st,
            'updated_by' => $request->updated_by,
        ]);

        if($request->hasFile('nama_lampiran')){
            $oke = Lampiran::where('id',$id)->first();
        
            $path = public_path('uploads/lampiran/').$oke->nama_lampiran;
            if (file_exists($path)) {
                File::delete($path);
            }
           
            $files = $request->file('nama_lampiran');
            $prefix = date('Ymdhis');
            $by = $request->updated_by;
            $extension = $files->getClientOriginalExtension();
            $filename = $prefix.'_'. $by.'.'.$extension;
            $request->file('nama_lampiran')->move(public_path('uploads/lampiran'), $filename);

            Lampiran::where('id',$id)
                ->update([
                    'nama_lampiran' => $filename
                ]);

        }

        return redirect(route('lampirans.index'))->with('status', 'Data berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oke = Lampiran::where('id',$id)->first();
        $path = public_path('uploads/lampiran/').$oke->nama_lampiran;
        if (file_exists($path)) {
            File::delete($path);
        }
       
        Lampiran::destroy($id);
    }

    public function getLampirans(Request $request)
    {
            $data = Lampiran::select('*');
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = 
                    '<div class="list-icons">
                        <a href="'.route('lampirans.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-zoomin3 mr-2"></i>Detail</a>
                        <a href="'.route('lampirans.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                    return $actionBtn;
                }
                )
                ->editColumn('keterangan', function($data)
                {
                    return $data->keterangan;
                })
                
               ->editColumn('nama_lampiran', function($data)
                {
                    $file = '<a href="'.asset('uploads/lampiran/'.$data->nama_lampiran).'" target="_blank">'.$data->nama_lampiran.'</a>';
                    return $file;
                })
                ->addColumn('tanggal', function($data){
                    return \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('D MMMM Y');
                    
                })
                ->rawColumns(['action', 'status','nama_lampiran'])
                ->make(true);
        
    }
}
