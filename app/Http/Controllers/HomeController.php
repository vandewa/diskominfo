<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;
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
use App\Models\InformasiPublik;
use App\Models\Visitor;
use Carbon\Carbon;
use Browser;
use App\Models\PinjamPeralatan;
use Illuminate\Support\Facades\Http;
use App\Models\DaftarInformasiPublik;
use Illuminate\Support\Facades\Cache;
use App\Models\Soal;




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
        $strukturppid = Menu::where('id',48)
        ->first();

        return view('menu.index', compact('strukturppid'));
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

     public function informasiPublik(Request $request)
    {

        $terbaru = DaftarInformasiPublik::max('waktu_pembuatan');

        $data1 = DaftarInformasiPublik::with(['anak'=> function($z)use($request) {
             if($request->filled('waktu_pembuatan')){
                 $z->where('waktu_pembuatan', $request->waktu_pembuatan);
             }}])->where('root', null)->where('type', 'JENIS_INFORMASI_PUBLIK_TP_01');
            
            if(!$request->filled('waktu_pembuatan')){
                $data1->where('waktu_pembuatan', '=', $terbaru);
            }


        $data2 = DaftarInformasiPublik::with(['anak'=> function($z)use($request) {
             if($request->filled('waktu_pembuatan')){
                 $z->where('waktu_pembuatan', $request->waktu_pembuatan);
             }}])->where('root', null)->where('type', 'JENIS_INFORMASI_PUBLIK_TP_02');
            
            if(!$request->filled('waktu_pembuatan')){
                $data2->where('waktu_pembuatan', '=', $terbaru);
            }

        $data3 = DaftarInformasiPublik::with(['anak'=> function($z)use($request) {
             if($request->filled('waktu_pembuatan')){
                 $z->where('waktu_pembuatan', $request->waktu_pembuatan);
             }}])->where('root', null)->where('type', 'JENIS_INFORMASI_PUBLIK_TP_03');
            
            if(!$request->filled('waktu_pembuatan')){
                $data3->where('waktu_pembuatan', '=', $terbaru);
            }

        $data4 = DaftarInformasiPublik::with(['anak'=> function($z)use($request) {
             if($request->filled('waktu_pembuatan')){
                 $z->where('waktu_pembuatan', $request->waktu_pembuatan);
             }}])->where('root', null)->where('type', 'JENIS_INFORMASI_PUBLIK_TP_04');
            
            if(!$request->filled('waktu_pembuatan')){
                $data4->where('waktu_pembuatan', '=', $terbaru);
            }


         if($request->filled('waktu_pembuatan')){
             $data1->wherehas('anak', function($a) use ($request) {
                    $a->where('waktu_pembuatan', $request->waktu_pembuatan);
             });
            $data2->wherehas('anak', function($a) use ($request) {
                    $a->where('waktu_pembuatan', $request->waktu_pembuatan);
             });
            $data3->wherehas('anak', function($a) use ($request) {
                    $a->where('waktu_pembuatan', $request->waktu_pembuatan);
             });
            $data4->wherehas('anak', function($a) use ($request) {
                    $a->where('waktu_pembuatan', $request->waktu_pembuatan);
             });

        }

        $data1 = $data1->get();
        $data2 = $data2->get();
        $data3 = $data3->get();
        $data4 = $data4->get();

        // return $data1;
        
        return view('home.daftarinformasipublik', compact('data1','data2', 'data3', 'data4'));
        // return view('home.daftarinformasipublik');
    }

    public function getInformasiPublik(Request $request)

    {

            $data = InformasiPublik::select('*');

            // return $data;
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    if(substr($data->nama_lampiran,-4,1) == '.' || substr($data->nama_lampiran,-5,1) == '.') {
                        if(substr($data->nama_lampiran,0,18) == '/uploads/lampiran/') {
                            $actionBtn = '<a href="'.$data->nama_lampiran.'" class="edit btn btn-success btn-sm" target="_blank">Tampil</a>';
                        } else {
                            $actionBtn = '<a href="/uploads/lampiran/'.$data->nama_lampiran.'" class="edit btn btn-success btn-sm" target="_blank">Tampil</a>';
                        }

                      return $actionBtn;
                    } else{
                         if(substr($data->nama_lampiran,0,6) == '/page/' ) {
                            $actionBtn = '<a href="'.$data->nama_lampiran.'" class="edit btn btn-success btn-sm" target="_blank">Tampil</a>';
                            return $actionBtn;
                         }

                        $actionBtn = '<a href="/detail/'.$data->nama_lampiran.'" class="edit btn btn-success btn-sm" target="_blank">Tampil</a>';
                      return $actionBtn;
                    }

                })
                ->editColumn('keterangan', function($data)
                {
                    return $data->keterangan;
                })

                ->editColumn('nama_lampiran', function($data)
                {
                    return $data->nama_lampiran;
                })

                ->editColumn('informasi_st', function($data)
                {
                    return $data->informasi_st;
                })

                ->rawColumns(['action', 'status'])
                ->make(true);


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
        $datanya = '';
        $jenis = '';
            if($request->filled('q')){
                $a = substr($request->q, 0, 3);
                    switch ($a) {
                        // case "ADC":
                        //     $data = AksesDc::with(['status'])->whereNo($request->q)->first();
                        //     break;
                        // case "LSV":
                        //     $data = LayananServer::with(['status'])->whereNo($request->q)->first();
                        //     break;
                        // case "VPB":
                        //     $data = PenambahanVps::with(['status'])->whereNo($request->q)->first();
                        //     break;
                        // case "CSV":
                        //     $data = ColocationServer::with(['status'])->whereNo($request->q)->first();
                        //     break;
                        // case "KDC":
                        //     $data = KunjunganDc::with(['status'])->whereNo($request->q)->first();
                        //     break;
                        // case "PSV":
                        //     $data = PengajuanServer::with(['status'])->whereNo($request->q)->first();
                        //     break;
                        // case "PVP":
                        //     $data = PerubahanVps::with(['status'])->whereNo($request->q)->first();
                        //     break;
                        case "PPE":
                            $data = PinjamPeralatan::with(['status'])->whereNo($request->q)->first();
                        break;
                        }

                // if($a != 'ADC' || 'LSV' || 'VPB' || 'CSV' || 'KDC' || 'PSV' || 'PVP' || 'PPE'){
                //              $datanya = 'Data tidak ditemukan';
                // }

                if($a != 'PPE'){
                    $datanya = 'Data tidak ditemukan';
                }
        }

         if (!empty($data)){
           if(substr($data->no, 0, 3) == 'PPE'){
                $jenis = 'Permohonan layanan pinjam peralatan';
            }
         }

        //  return $data;

        // $soal = Soal::with(['jawaban'])->get();

        // return $soal;
        

        return view('home.pengajuanizin', compact('data', 'datanya', 'jenis'));
        // return view('home.pengajuanizin', compact('soal'));
    }


    public function pengajuanizinPost(Request $request)
    {


        $path = public_path('uploads/bukti');

        if (!file_exists($path)) {
              mkdir($path);
         }

       if($request->hasFile('bukti')){
            $files = $request->file('bukti');
            $prefix = date('Ymdhis');
            $extension = $files->getClientOriginalExtension();
            $filename = $prefix.'.'.$extension;
            $request->file('bukti')->move(public_path('uploads/bukti'), $filename);

            $notif = 'Terima kasih, surat pernyataan berhasil dikirim.'.urldecode('%0D%0A').
             'Mohon ditunggu notifikasi berikutnya.'.
            urldecode('%0D%0A%0D%0A'.'%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60%20');

            $notifikasi = 'Tiket dengan nomor ( *'.$request->no.'* ) sudah melakukan upload surat pernyataan.'.urldecode('%0D%0A').
            'Mohon untuk dilakukan pengecekan pada website Diskominfo.'.urldecode('%0D%0A%0D%0A').
            url('/admin/pinjam-peralatan/'.$request->id).urldecode('%0D%0A%0D%0A').
            'Terima Kasih :)'.
            urldecode('%0D%0A%0D%0A'.'%C2%A9%20%60%60%60Diskominfo%20Wonosobo%60%60%60%20');


            PinjamPeralatan::find($request->id)
            ->update([
                'bukti' => $filename,
            ]);

             Http::asForm()->post('http://10.0.1.21:8000/send-message', [
                'number' => $request->nomor,
                'message' => $notif,
            ]);

            Http::asForm()->post('http://10.0.1.21:8000/send-group-message', [
            'name' => 'Sekretariat Diskominfo',
            'message' => $notifikasi,
            ]);

            return redirect(url('pengajuanizin?q='.$request->no))->with('status', 'oke');

       }

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

        // return $detail;


        return view('home.detail', compact('detail', 'kategori'));
    }

     public function details($post)
    {

        Pengumuman::find($post);

        $details = Pengumuman::with(['attachments'])
        ->where('id', '=', $post)
        ->first();


        $pengumuman = Pengumuman::with(['gambarmuka'])
        ->wherenotin('id', [$post])
        ->orderBy('created_at', 'desc')
        ->limit(2)
        ->get();

        $lampiran = Lampiran::where('nama_lampiran', $details->nama_lampiran)->first();

        return view('home.details', compact('details','pengumuman', 'lampiran'));
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
        $populer = Cache::remember('populer', 3600, function () {
            return Posting::with(['gambarMuka'])
                ->orderBy('views', 'desc')
                ->limit(3)
                ->get();
        });
        $posting2 = Cache::remember('posting2', 3600, function () {
            return  Posting::with(['attachment', 'gambarMuka','nama', 'kategori'])
                ->where('posisi', '=', 'menu_atas')
                ->orderBy('created_at', 'desc')
                ->simplePaginate(2);
        });
        $postingg = Cache::remember('postingg', 3600, function () {
            return Posting::with(['attachment', 'gambarMuka', 'nama'])
                ->where('posisi', '=', 'highlight')
                ->orderBy('created_at', 'desc')
                ->get();
        });
        $posting = Cache::remember('posting', 3600, function () {
            return DB::table('posting')
                ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
                ->join('users', 'created_by', '=', 'users.id')
                ->select('posting.*','attachment.*', 'users.*')
                ->orderBy('posting.created_at', 'desc')->get();
        });
        $sampul = Cache::remember('sampul', 3600, function () {
            return Sampul::where('id',1)
                ->first();
        });



        $infohoax = Posting::with(['gambarMuka'])
        ->where('id_kategori', 7)
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();

        $infografis = Infografis::with(['attachments' , 'gambarMuka'])
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();

        $checkLocation=geoip()->getLocation($_SERVER['REMOTE_ADDR']);

        // $cek = Visitor::where('ip', $checkLocation->ip)->orderBy('created_at', 'desc')->first();

        // $now = Carbon::now()->format('Y-m-d');
        //  if(!empty($cek)){
            //  $tanggal = $cek->created_at->format('Y-m-d');
            //  if($tanggal != $now) {

                    if(Browser::isDesktop() == 1){
                         $jenis = 'Desktop';
                    }
                    if(Browser::isTablet() == 1){
                         $jenis = 'Tablet';
                    }
                    if(Browser::isMobile() == 1){
                         $jenis = 'Mobile';
                    }

                    Visitor::create([
                    'ip' => $checkLocation->ip,
                    'kota' => $checkLocation->city,
                    'negara' => $checkLocation->country,
                    'browser_family' => Browser::browserFamily(),
                    'browser_name' => Browser::browserName(),
                    'platform_family' => Browser::platformFamily(),
                    'platform_name' =>  Browser::platformName(),
                    'jenis' =>  $jenis,
                ]);
            // }
        //  }

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

        // return $posting_samping;

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
        $pengumuman= Pengumuman::with(['gambarmuka', 'attachments'])
        ->orderBy('created_at','desc')
        ->Simplepaginate(12);

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
         $infografis = Infografis::with(['attachments' , 'gambarMuka'])
        ->orderBy('created_at', 'desc')
        ->simplePaginate(8);

        return view('home.infografis', compact('infografis'));
    }

    public function daftarInfohoax()
    {
        $infohoax= Posting::with(['gambarMuka'])
        ->where('id_kategori',7)
        ->orderBy('created_at','desc')
        ->simplePaginate(8);

        return view('home.daftarinfohoax', compact('infohoax'));
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }


    /**
        * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */

}
