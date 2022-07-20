<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Attachments;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Lampiran;
use Illuminate\Support\Facades\File;

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

        $path = 'uploads/'.\Carbon\Carbon::now()->isoFormat('Y');
        $paths = 'uploads/'.\Carbon\Carbon::now()->isoFormat('Y').'/'.\Carbon\Carbon::now()->isoFormat('MMMM').'/';
        
        if (!file_exists($paths)) {
             if (!file_exists($path)) {
              mkdir($path);
             }
            mkdir($paths);
         } 

        if($request->hasFile('nama_lampiran')){
            $a = $request->file('nama_lampiran'); 
            $prefix = date('Ymdhis');
            $by = $request->created_by;
            $extension = $a->extension();
            $filename = $prefix.'_'. $by.'.'.$extension;
        }

         $b = Pengumuman::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'nama_lampiran' => $filename??'',
          ]);

        if($request->hasFile('nama_lampiran')){
            $files = $request->file('nama_lampiran');
            $prefix = date('Ymdhis');
            $by = $request->created_by;
            $extension = $files->getClientOriginalExtension();
            $filename = $prefix.'_'. $by.'.'.$extension;

            $files->move(public_path('uploads/lampiran'), $filename);

            $lampiran = new Lampiran() ;
            $lampiran->nama_lampiran = $filename;
            $lampiran->keterangan =  $request->judul;
            $lampiran->created_by =  $request->created_by;
            $lampiran->save();

        }

        if($request->hasFile('file_name')){
            $by = $request->created_by;
            $files = $request->file('file_name');
            $prefix = date('Ymdhis');
            $no = 1;
                foreach($files as $a){
                    $extension = $a->getClientOriginalExtension();
                    $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
                    $a->move(public_path($paths), $filename);
                    $attachments = new Attachments() ;
                    $attachments->id_pengumuman = $b->id;
                    $attachments->file_name = $paths.$filename;
                    $attachments->save();

                    $no++;
                    }
        } else {
            $attachments = new Attachments() ;
            $attachments->id_pengumuman = $b->id;
            $attachments->file_name = 'diskominfo.jpg';
            $attachments->save();
        }
       

        return redirect(route('pengumumans.index'))->with('status', 'Pengumuman berhasil ditambahkan.');
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
            'isi' => $request->isi,
        ]);


        if($request->hasfile('file_name')){
        $by = $request->updated_by;
        $files = $request->file('file_name');
        $prefix = date('Ymdhis');
        $no = 1;
            foreach($files as $a){
                $extension = $a->extension();
                $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
               
                $a->move(public_path($paths), $filename);
                $attachment = Attachments::where('id_pengumuman',$id);
                Attachments::create(['file_name' => $filename, 'id_pengumuman'=> $id]);
                $no++;
                
                }
        }
         return redirect(route('pengumumans.index'))->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oke = Pengumuman::where('id',$id)->first();
        $okee = Attachments::where('id_pengumuman',$oke->id)->get();

        $path_lampiran = public_path('uploads/lampiran/').$oke->nama_lampiran;
        $path_gambar = public_path($oke->file_name);
       
        if (file_exists($path_lampiran)) {
            unlink($path_lampiran);
            Lampiran::where('nama_lampiran', $oke->nama_lampiran)->delete();
        }

        if(!empty($okee)) {
            foreach($okee as $item){
                if($item !=  public_path('uploads/diskominfowonosobo.jpg')){
                    unlink($item->file_name);
                }
            }
            Attachments::destroy($okee);
        }
        
        Pengumuman::destroy($id);
    }

    public function getPengumuman(Request $request)
    {
            $data = Pengumuman::with(['gambarmuka']);
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = 
                    '<div class="list-icons">
                        <a href="'.route('pengumumans.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-zoomin3 mr-2"></i>Detail</a>
                        <a href="'.route('pengumumans.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                    return $actionBtn;
                }
                )
                ->editColumn('nama_lampiran', function($data)
                {
                     $foto = '<a href="'.asset($data->gambarmuka->file_name).'" target="_blank"><img src="'.asset($data->gambarmuka->file_name).'" style="height:50px;"></a>';
                    return $foto;
                })

                ->addColumn('tanggal', function($data)
                {
                     return \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('D MMMM Y');
                })

                ->editColumn('judul', function($data)
                {
                    return $data->judul;
                })
            
                ->rawColumns(['action', 'status','nama_lampiran'])
                ->make(true);
        
    }

    public function hapus($id){
        Attachments::find($id)->delete();

        return redirect()->back();
    }
}
