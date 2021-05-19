<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Attachments;
use DataTables;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengumuman.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $b= Pengumuman::create($request->except(['file_name']));

        if($request->hasFile('file_name')){
        $by = $request->created_by;
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');
        $no = 1;
            foreach($files as $a){
                $extension = $a->extension();
                $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
                $a->move(public_path('/uploads'), $filename);
                $attachment = new Attachments() ;
                $attachment->id_pengumuman = $b->id;
                $attachment->file_name = $filename;
                $attachment->save();

                $no++;
                }
        } else {
            $attachment = new Attachments() ;
            $attachment->id_pengumuman = $b->id;
            $attachment->file_name = 'diskominfo.jpg';
            $attachment->save();
        }
       

        return redirect('pengumumans')->with('status', 'Pengumuman berhasil ditambahkan.');
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
         $pengumuman = Pengumuman::with(['attachments'])->find($id);

        return view('pengumuman.edit', compact('pengumuman'));
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

        Pengumuman::find($id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);


        if($request->hasfile('file_name')){
        $by = $request->updated_by;
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');
        $no = 1;
            foreach($files as $a){
                $extension = $a->extension();
                $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
               
                $a->move(public_path('/uploads'), $filename);
                $attachment = Attachments::where('id_pengumuman',$id);
                Attachments::create(['file_name' => $filename, 'id_pengumuman'=> $id]);
                $no++;
                
                }
        }
        return redirect ('pengumumans')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengumuman::destroy($id);
    }

    public function getPengumuman(Request $request)
    {
            $data = Pengumuman::orderBy('created_at','desc')->get();
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="'.route('pengumumans.edit', $data->id ).' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="'.route('pengumumans.destroy', $data->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    return $actionBtn;
                }
                )
                ->editColumn('foto', function($data)
                {
                    Pengumuman::with(['gambarmuka']);
                     $foto = '<a href="'.asset('uploads/'.$data->gambarmuka->file_name).'" target="_blank"><img src="'.asset('uploads/'.$data->gambarmuka->file_name).'" style="height:50px;"></a>';
                    return $foto;
                })
                ->editColumn('judul', function($data)
                {
                    return $data->judul;
                })
            
                ->rawColumns(['action', 'status','foto'])
                ->make(true);
        
    }

    public function hapus($id){
        Attachments::find($id)->delete();

        return redirect()->back();
    }
}
