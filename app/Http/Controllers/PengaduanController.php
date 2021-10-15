<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use DataTables;

class PengaduanController extends Controller
{
     public function index()
    {
        return view('pengaduan.index');
    }

    public function store(Request $request)
    {
       Pengaduan::create(
            [
                'nama' =>  ucwords($request->nama),
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'telp' => $request->telp,
                'email' => $request->email,
                'isi_aduan' => $request->isi_aduan,
                'publish' => 0,
                'status' => 0
            ]
        );

          return redirect(url('pengaduan'))->with('statuss','oke');

    }

     public function edit($id)
    {
        $pengaduans = Pengaduan::with(['childs'])->find($id);
        $data = $pengaduans;
        $data->update([
            'status' => 1
        ]);

        return view('pengaduan.edit', compact('pengaduans'));
    }

    public function update(Request $request, $id)
    {
        Pengaduan::find($id)
            ->update([
            'publish' => $request->publish,
             ]);

         if($request->filled('isi_aduan')){
            Pengaduan::create([
                'isi_aduan' => $request->isi_aduan,
                'parent'=> $request->parent,
                'created_by' => $request->created_by,
                ]);
            }

        return redirect ('pengaduans')->with('status', 'Data berhasil diubah.');

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

     public function getPengaduan(Request $request)
    {
       
            $data = Pengaduan::where('parent',null)
            ->orderBy('created_at', 'desc')
            ->get();
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="'.route('pengaduans.edit', $data->id ).' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="'.route('pengaduans.destroy', $data->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
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
                 ->editColumn('alamat', function($data){
                 $alamat = $data->alamat;
                 return ucwords($alamat);
                })
                 ->editColumn('publish', function($data){
                 if($data->publish == '1'){
                        return '<div class="d-flex justify-content-center"><i class="icon-checkmark2"></i></div>';
                    } else {
                        return '<i class="icon-cross3"></i>';
                    }
                })
                 
                 ->editColumn('status', function($data){
                 if($data->status == '1'){
                        return '<div class="d-flex justify-content-center"><i class="icon-checkmark2"></i></div>';
                    } else {
                        return '<i class="icon-cross3"></i>';
                    }
                })
                
                ->rawColumns(['action', 'status','publish'])
                ->make(true);
        
    }
    public function destroy($id)
    {
       $deletedRows = Pengaduan::where('parent', $id)->delete();
       Pengaduan::destroy($id);


    }

       public function hapus($id)
    {


        Pengaduan::where('id',$id)->delete();

        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }

}
