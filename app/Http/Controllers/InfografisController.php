<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\infografis;
use App\Http\Requests\InfografiscreateValidation;


class InfografisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('infografis.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('infografis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfografiscreateValidation $request)
    {

          $files = $request->file('file_name'); 
           $extension = $files->extension();
            $prefix = date('Ymdhis');
            $by = $request->created_by;
           

            $filename = $prefix.'_'. $by.'.'.$extension;

            $files->move(public_path('/uploads'), $filename);



            Infografis::create([
            'judul' => $request->judul,
            'file_name' => $filename,
            'created_by' => $request->created_by
        ]);

      

          return redirect ('infografis')->with('status', 'Data berhasil ditambahkan.');

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
         $infografis = Infografis::find($id);
        return view('infografis.edit', compact('infografis'));
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
        Infografis::find($id)
       ->update([
           'judul' => $request->judul,
       ]);

        return redirect ('infografis')->with('status', 'Data berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Infografis::destroy($id);
    }

    
     public function getInfografis(Request $request)
    {
            $data = Infografis::orderBy('created_at','desc')->get();


            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <div class="list-icons">
                    <a href="'.route('infografis.edit', $row->id ).' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="'.route('infografis.destroy', $row->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    return $actionBtn;
                })
                ->addColumn('status', function($row){
                    $actionBtn = '
                    <span class="badge badge-success">Active</span>';
                    return $actionBtn;
                })
                ->editColumn('file_name', function($a){
                
                $nama = $a->file_name;    
                $link1 = "uploads/".$nama;
                $link2 = '<a href="'.$link1.'" target="_blank"><img src="'.$link1.'" style="height:50px;"></a>';


             return $link2;
                })
                ->editColumn('judul', function($a){
                    return $a->judul;
                })
                ->editColumn('created_at', function($a){
                    return \Carbon\Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y');
                    // return date('d F Y', strtotime($a->created_at));
                })
                
                ->editColumn('created_by', function($a)
                {
                    Infografis::with(['nama']);
                    return $a->namanya->name??'gtrgtd';
                })
                ->rawColumns(['action', 'status','file_name'])
                ->make(true);
        
    }
}
