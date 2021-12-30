<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Posting;
use App\Models\Category;
use App\Models\Users;
use App\Models\Lampiran;
use App\Models\Komentar;
use App\Models\Youtube;
use App\Models\Gallery;
use App\Models\Attachmentt;
use App\Models\Pengumuman;
use App\Models\Pengaduan;
use App\Models\Sampul;
use App\Models\Menu;
use App\Models\Infografis;
use DataTables;
use PHPUnit\Framework\Constraint\Count;
use App\Models\AksesDc;
use App\Models\LayananServer;
use App\Models\PenambahanVps;
use App\Models\ColocationServer;
use App\Models\KunjunganDc;
use App\Models\PengajuanServer;
use App\Models\PerubahanVps;

class HomeController extends Controller
{

    public function profil()
    {

     $profil = Menu::where('id',1)
    ->first();

    return view('home.profil', compact('profil'));
    }

    public function visimisi()
    {
        $visimisi = Menu::where('id',2)
        ->first();

        return view('home.visimisi', compact('visimisi'));
    }
    

    public function tugasppid()
    {
        $tugasppid = Menu::where('id',45)
        ->first();


        return view('home.tugasppid', compact('tugasppid'));
    }

    public function strukturppid()
    {
        $strukturppid = Menu::where('id',46)
        ->first();


        return view('home.strukturppid', compact('strukturppid'));
    }

    public function personil()
    {

        $struktur = Menu::where('id',6)
        ->first();
    
        return view('home.struktur', compact('struktur'));
    }

    public function tupoksi()
    {

        $tupoksi = Menu::where('id',3)
        ->first();

        return view('home.tupoksi', compact('tupoksi'));
    }

    public function getLampiran(Request $request)

    {
            $data = Lampiran::orderBy('keterangan', 'asc')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '<a href="uploads/lampiran/'.$data->nama_lampiran.'" class="edit btn btn-success btn-sm" target="_blank">Download</a>';
                    return $actionBtn;
                })
                ->editColumn('keterangan', function($data)
                {
                    return $data->keterangan;
                })

                ->rawColumns(['action', 'status'])
                ->make(true);

        
    }
    
    public function lampiran()
    {
        return view('home.lampiran');
    }

     public function kominfo($id)
    {

        $kominfo = Menu::where('id', $id)
        ->first();
    

        return view('home.kominfo', compact('kominfo'));


    }

    public function pengajuanizin(Request $request)
    {   
        $data = '';
        if($request->filled('q')){
            $a = substr($request->q, 0, 3);
                switch ($a) {
                    case "ADC":
                        $data = AksesDc::with(['status'])->whereNo($request->q)->first();
                        break;
                    case "LSV":  
                        $data = LayananServer::with(['status'])->whereNo($request->q)->first();
                        break;
                    case "VPB":
                        $data = PenambahanVps::with(['status'])->whereNo($request->q)->first();
                        break;
                    case "CSV":
                        $data = ColocationServer::with(['status'])->whereNo($request->q)->first();
                        break;
                    case "KDC":
                        $data = KunjunganDc::with(['status'])->whereNo($request->q)->first();
                        break;
                    case "PSV":
                        $data = PengajuanServer::with(['status'])->whereNo($request->q)->first();
                        break;
                    case "PVP":
                        $data = PerubahanVps::with(['status'])->whereNo($request->q)->first();
                        break;
                    }
        }
        return view('home.pengajuanizin', compact('data'));
    }


    public function detail(Posting $post)
    {

        Posting::find($post->id_posting)->increment('views');
        
        $detail = Posting::with(['attachment', 'gambarMuka', 'nama'])
        ->where('slug', '=', $post->slug)
        ->first();
        

        $kategori = Posting::where('id_kategori',$detail->id_kategori)
        ->wherenotin('id_posting', [$post->id_posting])
        ->orderBy('created_at', 'desc')
        ->limit(2)
        ->get(); 
   

        return view('home.detail', compact('detail', 'kategori'));
    }

     public function details($post)
    {

        Pengumuman::find($post);

        $details = Pengumuman::with(['attachments'])
        ->where('id', '=', $post)
        ->first();


        $pengumuman = Pengumuman::with(['gambarMuka'])
        ->wherenotin('id', [$post])
        ->orderBy('created_at', 'desc')
        ->limit(2)
        ->get();  
        

        return view('home.details', compact('details','pengumuman'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $youtube =  Youtube::orderBy('created_at', 'desc')
        ->limit(3)
        ->get();

        $cek_highlight = Posting::where('posisi', '=', 'highlight')
        ->count();

        if($cek_highlight >= 6){

            $cek =  Posting::where('posisi', '=', 'highlight')
            ->orderBy('created_at', 'asc')
            ->first();
    
            Posting::where('id_posting', $cek->id_posting)->update([
                'posisi' => 'menu_atas'
            ]);
        }

        $populer = Posting::with(['gambarMuka'])
        ->orderBy('views', 'desc')
        ->limit(3)
        ->get();

        $posting2 = Posting::with(['attachment', 'gambarMuka','nama', 'kategori'])
        ->where('posisi', '=', 'menu_atas')
        ->orderBy('created_at', 'desc')
        ->simplePaginate(4);

        $postingg = Posting::with(['attachment', 'gambarMuka', 'nama'])
        ->where('posisi', '=', 'highlight')
        ->orderBy('created_at', 'desc')
        ->get();

        $posting = DB::table('posting') 
        ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->join('users', 'created_by', '=', 'users.id')
        ->select('posting.*','attachment.*', 'users.*')
        ->orderBy('posting.created_at', 'desc');

        $sampul = Sampul::where('id',1)
        ->first();

        $infohoax = Posting::with(['gambarMuka'])
        ->where('id_kategori', 7)
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();

        $infografis = Infografis::orderBy('created_at', 'desc')
        ->limit(4)
        ->get();



        return view('home.index', compact('posting2', 'posting', 'postingg', 'populer', 'youtube','sampul', 'infohoax', 'infografis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cari(Request $request)
    {
        $posting_samping =  Posting::with(['gambarMuka'])
        ->orderBy('views', 'desc')
        ->limit(3)
        ->get();

        $cari = $request->q;

        $posting = Posting::with(['kategori', 'nama'])
        ->where('judul_posting', 'like', "%".$cari."%")
        ->select('judul_posting', 'id_posting', 'id_kategori', 'created_by', 'isi_posting', 'slug')
        ->orderBy('created_at','desc')
        ->paginate(5)
        ->appends(['q' => $request->q]);

        $jumlah = Posting::with(['kategori', 'nama'])
        ->where('judul_posting', 'like', "%".$cari."%")
        ->select('judul_posting', 'id_posting', 'id_kategori', 'created_by', 'isi_posting')
        ->paginate(5)
        ->appends(['q' => $request->q])
        ->count();


        return view ('home.cari', compact('posting', 'cari', 'posting_samping','jumlah'));
    }

    public function lacak(Request $request)
    {
        $posting_samping =  Posting::with(['gambarMuka'])
        ->orderBy('views', 'desc')
        ->limit(3)
        ->get();

        $cari = $request->q;

        $posting = Posting::with(['kategori', 'nama'])
        ->where('judul_posting', 'like', "%".$cari."%")
        ->select('judul_posting', 'id_posting', 'id_kategori', 'created_by', 'isi_posting')
        ->orderBy('created_at','desc')
        ->paginate(5)
        ->appends(['q' => $request->q]);

        $jumlah = Posting::with(['kategori', 'nama'])
        ->where('judul_posting', 'like', "%".$cari."%")
        ->select('judul_posting', 'id_posting', 'id_kategori', 'created_by', 'isi_posting')
        ->paginate(5)
        ->appends(['q' => $request->q])
        ->count();

        return view ('home.cari', compact('posting', 'cari', 'posting_samping','jumlah'));
    }


    public function kategori(Category $post)
    {

        $populers = Posting::with(['gambarMuka'])
        ->orderBy('views', 'desc')
        ->limit(3)
        ->get();
        
        $kategori = Posting::with(['gambarMuka','kategori'])
        ->where('id_kategori','=', $post->id)
        ->orderBy('created_at','desc')
        ->simplePaginate(12);

        $jumlah = Posting::where('id_kategori',$post->id)
        ->count();

        $kategorinya = Posting::with(['kategori'])
        ->where('id_kategori',$post->id)
        ->first();

        return view('home.kategori', compact('kategori','populers','jumlah', 'kategorinya'));
    }

    public function uploadby(Users $post)
    {

        $populers = Posting::with(['gambarMuka'])
        ->orderBy('views', 'desc')
        ->limit(3)
        ->get();
        
        $uploadby = Posting::with(['gambarMuka','kategori'])
        ->where('created_by','=', $post->id)
        ->orderBy('created_at','desc')
        ->simplePaginate(12);

        $upload = Posting::with(['gambarMuka','kategori'])
        ->where('created_by',$post->id)
        ->first();

        $jml_post = Posting::where('created_by', $post->id)
        ->orderBy('created_at','desc')
        ->count();    
        

        return view('home.uploadby', compact('uploadby','populers','upload','jml_post'));
    }

    public function hubungikami()
    {
        return view('home.hubungikami');
    }

    public function pengajuan()
    {
        return view('home.pengajuan');
    }

     public function simpan(Request $request)
    {
           Komentar::create(
            [
                'nama' => $request->nama,
                'nomor' => $request->nomor,
                'email' => $request->email,
                'isi' => $request->isi,
                'status' => 0
            ]
        );

        return redirect('pengajuan')->with('status', 'Oke');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function galeri()
    {
        $galeri= Gallery::orderBy('created_at','desc')
        ->paginate(10);

        return view('home.galeri', compact('galeri'));
    }

       public function pengumuman()
    {
        $pengumuman= Pengumuman::orderBy('created_at','desc')
        ->get();

        return view('home.pengumuman', compact('pengumuman'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function pengaduan()
    {
        $pengaduan= Pengaduan::with(['namanya','childs.namanya'])
        ->orderBy('created_at','desc')
        ->where('publish',1)
        ->paginate(5);;

        return view('home.pengaduan',compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function getWebsite()
    {
        $website= Posting::where('id_kategori','website')
        ->first();

        return view('home.website', compact('website'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
   public function detailInfografis()
    {
        $infografis= Infografis::orderBy('created_at','desc')
        ->get();

        return view('home.infografis', compact('infografis'));
    }

    public function daftarInfohoax()
    {
        $infohoax= Posting::with(['gambarMuka'])
        ->where('id_kategori',7)
        ->orderBy('created_at','desc')
        ->get();

        return view('home.daftarinfohoax', compact('infohoax'));
    }

    /**
        * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */

}
