<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller;
// use App\Models\Home;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LampiranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\MenuBerandaController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\SampulController;
use App\Http\Controllers\InfohoaxController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\MediaController;
use Carbon\Carbon;
use App\Http\Controllers\Perijinan\AksesDcController;
use App\Http\Controllers\Perijinan\PenambahanVpsController;
use App\Http\Controllers\Perijinan\PerubahanVpsController;
use App\Http\Controllers\Perijinan\PengajuanServerController;
use App\Http\Controllers\Perijinan\LayananServerController;
use App\Http\Controllers\Perijinan\PerminColController;
// use App\Http\Controllers\PerijinanBackend\AksesDataCenterController;
use App\Http\Controllers\Perijinan\KunjunganDcController;
use App\Http\Controllers\Inventory\SatuanController;
use App\Http\Controllers\Inventory\BarangController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\Inventory\KategoriController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Front\FrontZoomController;
use App\Http\Controllers\Front\FrontBukuTamuController;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\Layanan\MediaPublikasiController;
use App\Http\Controllers\Layanan\LiputanController;
use App\Http\Controllers\Layanan\InformasiPublikController;
use App\Http\Controllers\Layanan\PengajuanKeberatanController;
use App\Http\Controllers\Layanan\PinjamTempatController;
use App\Http\Controllers\Layanan\PinjamPeralatanController;
use App\Http\Controllers\Layanan\PermohonanMagangController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'], function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('home', HomeController::class);
// Route::resource('kategori', KategoriController::class);
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
// PPID
Route::get('/tugasppid', [HomeController::class, 'tugasppid'])->name('tugasppid');
Route::get('/strukturppid', [HomeController::class, 'strukturppid'])->name('strukturppid');
// END PPID
Route::get('/page/daftar-informasi-publik', [HomeController::class, 'informasiPublik'])->name('informasi.publik');
Route::get('/page/{id}', [HalamanController::class, 'dinamis'])->name('dinamis');
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/personil', [HomeController::class, 'personil'])->name('personil');
Route::get('/tupoksi', [HomeController::class, 'tupoksi'])->name('tupoksi');
Route::get('/lampiran', [HomeController::class, 'lampiran'])->name('lampiran');
Route::get('/pengaduan', [HomeController::class, 'pengaduan'])->name('pengaduan');
Route::get('/pengajuan', [HomeController::class, 'pengajuan'])->name('pengajuan');
Route::get('/pengajuanizin', [HomeController::class, 'pengajuanizin'])->name('pengajuanizin');
Route::post('/pengajuan/simpan', [HomeController::class, 'simpan'])->name('pengajuan.simpan');
Route::get('/website/user', [HomeController::class, 'getWebsite'])->name('website.list');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/kominfo/{id}', [HomeController::class, 'kominfo'])->name('kominfo');
Route::get('/detail/{post:slug}', [HomeController::class, 'detail'])->name('detail.posting');
Route::get('/details/{post}', [HomeController::class, 'details'])->name('details.pengumuman');
Route::get('/search', [HomeController::class, 'cari'])->name('search');
Route::get('/kategori/{post:slug}', [HomeController::class, 'kategori'])->name('kategori.posting');
Route::get('/uploadby/{post:slug}', [HomeController::class, 'uploadby'])->name('uploadby.posting');
Route::get('/posting/checkSlug', [PostingController::class, 'checkSlug'])->middleware('auth');
Route::get('/posting/{id}/checkSlug', [PostingController::class, 'checkSlug'])->middleware('auth');
Route::get('/posting/logout', [PostingController::class, 'logout'])->name('logout');
Route::get('/posting/list', [PostingController::class, 'getPosting'])->name('posting.list');
Route::get('/halaman/list', [HalamanController::class, 'getHalaman'])->name('halaman.list');
Route::get('/infohoax/checkSlug', [PostingController::class, 'checkSlug'])->middleware('auth');
Route::get('/infohoax/list', [InfohoaxController::class, 'getInfohoax'])->name('infohoax.list');
Route::get('/infohoax/daftar', [HomeController::class, 'daftarInfohoax'])->name('infohoax.daftar');
Route::get('/infografis/list', [InfografisController::class, 'getInfografis'])->name('infografis.list');
Route::get('/infografis/detail', [HomeController::class, 'detailInfografis'])->name('infografis.detail');
Route::get('/category/checkSlug', [CategoryController::class, 'checkSlug'])->middleware('auth');
Route::get('/category/list', [CategoryController::class, 'getCategory'])->name('category.list');
Route::get('/informasi-publik/list', [HomeController::class, 'getInformasiPublik'])->name('informasi.publik.list');
Route::get('/lampiran/list', [HomeController::class, 'getLampiran'])->name('lampiran.list');
Route::get('/lampirans/list', [LampiranController::class, 'getLampirans'])->name('lampirans.list');
Route::get('/user/checkSlug', [UserController::class, 'checkSlug'])->middleware('auth');
Route::get('/user/list', [UserController::class, 'getUser'])->name('user.list');
Route::get('/gallery/list', [GalleryController::class, 'getGallery'])->name('gallery.list');
Route::get('/youtube/list', [YoutubeController::class, 'getYoutube'])->name('youtube.list');
Route::get('/komentar/list', [KomentarController::class, 'getKomentar'])->name('komentar.list');
Route::get('/menuberanda/list', [MenuBerandaController::class, 'getMenuBeranda'])->name('menuberanda.list');
Route::get('/role/list', [RoleController::class, 'getRole'])->name('role.list');
Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/pengumumans/list', [PengumumanController::class, 'getPengumuman'])->name('pengumumans.list');
Route::get('/pengumumans/hapus/{id}/gambar', [PengumumanController::class, 'hapus'])->name('pengumumans.gambar.hapus');
Route::get('/posting/hapus/{id}/gambar', [PostingController::class, 'hapus'])->name('posting.gambar.hapus');
Route::get('/infohoax/hapus/{id}/gambar', [InfohoaxController::class, 'hapus'])->name('infohoax.gambar.hapus');
Route::get('/contact-form', [PengaduanController::class, 'index']);
Route::post('/captcha-validation', [PengaduanController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [PengaduanController::class, 'reloadCaptcha']);
Route::get('/pengaduans/list', [PengaduanController::class, 'getPengaduan'])->name('pengaduans.list');
Route::get('/pengaduans/hapus/{id}/komentar', [PengaduanController::class, 'hapus'])->name('pengaduan.komentar.hapus');
Route::get('/zoom/list', [ZoomController::class, 'getZoom'])->name('zoom.list');
Route::get('/permintaan/zoom/list', [FrontZoomController::class, 'getZoom'])->name('front.zoom.list');
Route::get('/agenda', [AgendaController::class, 'front'])->name('front.agenda');
Route::get('/tamu', [FrontBukuTamuController::class, 'index'])->name('front.tamu');

Route::group([], function () {
    Route::group(['prefix' => 'permintaan', 'as' => 'permintaan:'], function () {
       Route::resource('zoom', FrontZoomController::class);
    });
});

Route::group([], function () {
    Route::group(['prefix' => 'perijinan', 'as' => 'perijinan:'], function () {
        Route::get('akses/data-center', [AksesDcController::class, 'create'])->name('akses.dc.create');
        Route::post('akses/data-center', [AksesDcController::class, 'store'])->name('akses.dc.post');
        Route::get('akses/data-center/{id}/cetak', [AksesDcController::class, 'cetakSurat'])->name('cetak.surat.akses.dc');
        Route::get('permohonan/vps-baru', [PenambahanVpsController::class, 'create'])->name('vps.baru.create');
        Route::post('permohonan/vps-baru', [PenambahanVpsController::class, 'store'])->name('vps.baru.post');
        Route::get('permohonan/vps-baru/{id}/cetak', [PenambahanVpsController::class, 'cetakSurat'])->name('cetak.surat.vps.baru');
        Route::get('permohonan/perubahan-vps', [PerubahanVpsController::class, 'create'])->name('perubahan.vps.create');
        Route::post('permohonan/perubahan-vps', [PerubahanVpsController::class, 'store'])->name('perubahan.vps.post');
        Route::get('permohonan/perubahan-vps/{id}/cetak', [PerubahanVpsController::class, 'cetakSurat'])->name('cetak.surat.perubahan.vps');
        Route::get('permohonan/pengajuan-server', [PengajuanServerController::class, 'create'])->name('pengajuan.server.create');
        Route::post('permohonan/pengajuan-server', [PengajuanServerController::class, 'store'])->name('pengajuan.server.post');
        Route::get('permohonan/pengajuan-server/{id}/cetak', [PengajuanServerController::class, 'cetakSurat'])->name('cetak.surat.pengajuan.server');
        Route::get('permohonan/layanan-server', [LayananServerController::class, 'create'])->name('layanan.server.create');
        Route::post('permohonan/layanan-server', [LayananServerController::class, 'store'])->name('layanan.server.post');
        Route::get('permohonan/layanan-server/{id}/cetak', [LayananServerController::class, 'cetakSurat'])->name('cetak.surat.layanan.server');
        Route::get('permintaan/colocation', [PerminColController::class, 'create'])->name('permintaan.col.create');
        Route::post('permintaan/colocation', [PerminColController::class, 'store'])->name('permintaan.col.post');
        Route::get('permintaan/colocation/{id}/cetak', [PerminColController::class, 'cetakSurat'])->name('cetak.surat.colocation.server');
        Route::get('kunjungan/data-center', [KunjunganDcController::class, 'create'])->name('kunjungan.dc.create');
        Route::post('kunjungan/data-center', [KunjunganDcController::class, 'store'])->name('kunjungan.dc.post');
        Route::get('pembuatan/media-publikasi', [MediaPublikasiController::class, 'create'])->name('media.publikasi.create');
        Route::post('pembuatan/media-publikasi', [MediaPublikasiController::class, 'store'])->name('media.publikasi.post');
        Route::get('permohonan/liputan', [LiputanController::class, 'create'])->name('liputan.create');
        Route::post('permohonan/liputan', [LiputanController::class, 'store'])->name('liputan.post');
        Route::get('permohonan/informasi-publik', [InformasiPublikController::class, 'create'])->name('informasi.publik.create');
        Route::post('permohonan/informasi-publik', [InformasiPublikController::class, 'store'])->name('informasi.publik.post');
        Route::get('permohonan/pengajuan-keberatan', [PengajuanKeberatanController::class, 'create'])->name('pengajuan.keberatan.create');
        Route::post('permohonan/pengajuan-keberatan', [PengajuanKeberatanController::class, 'store'])->name('pengajuan.keberatan.post');
        Route::get('permohonan/pinjam-tempat', [PinjamTempatController::class, 'create'])->name('pinjam.tempat.create');
        Route::post('permohonan/pinjam-tempat', [PinjamTempatController::class, 'store'])->name('pinjam.tempat.post');
        Route::get('permohonan/pinjam-peralatan', [PinjamPeralatanController::class, 'create'])->name('pinjam.peralatan.create');
        Route::post('permohonan/pinjam-peralatan', [PinjamPeralatanController::class, 'store'])->name('pinjam.peralatan.post');
        Route::get('permohonan/magang', [PermohonanMagangController::class, 'create'])->name('magang.create');
        Route::post('permohonan/magang', [PermohonanMagangController::class, 'store'])->name('magang.post');




    });
    Route::resource('akses-data-center', AksesDcController::class);
    Route::resource('layanan-server', LayananServerController::class);
    Route::resource('vps-baru', PenambahanVpsController::class);
    Route::resource('perubahan-vps', PerubahanVpsController::class);
    Route::resource('colocation-server', PerminColController::class);
    Route::resource('kunjungan-data-center', KunjunganDcController::class);
    Route::resource('pengajuan-server', PengajuanServerController::class);
    Route::resource('buku_tamu', FrontBukuTamuController::class);
});

Route::group(['middleware' => ['permission:perizinan-update']], function () {
    Route::patch('akses-data-center/{id}/persetujuan', [AksesDcController::class, 'persetujuan'])->name('akses-data-center.persetujuan');
    Route::patch('layanan-server/{id}/persetujuan', [LayananServerController::class, 'persetujuan'])->name('layanan-server.persetujuan');
    Route::patch('vps-baru/{id}/persetujuan', [PenambahanVpsController::class, 'persetujuan'])->name('vps-baru.persetujuan');
    Route::patch('perubahan-vps/{id}/persetujuan', [PerubahanVpsController::class, 'persetujuan'])->name('perubahan-vps.persetujuan');
    Route::patch('colocation-server/{id}/persetujuan', [PerminColController::class, 'persetujuan'])->name('permintaan-col.persetujuan');
    Route::patch('kunjungan-data-center/{id}/persetujuan', [KunjunganDcController::class, 'persetujuan'])->name('kunjungan-data-center.persetujuan');
    Route::patch('pengajuan-server/{id}/persetujuan', [PengajuanServerController::class, 'persetujuan'])->name('pengajuan-server.persetujuan');
});

Route::group(['middleware' => ['permission:tiket-read']], function () {
    Route::group(['prefix' => 'tiket', 'as' => 'tiket:'], function () {
        Route::patch('tambah-petugas/{id}/petugas', [\App\Http\Controllers\Tiket\TiketController::class, 'storePenugasan'])->name('store.petugas');
        Route::get('tambah-petugas/{id}/surat-tugas/cetak', [\App\Http\Controllers\Tiket\TiketController::class, 'cetakSuratTugas'])->name('cetak.surat.tugas');
        Route::resource('tiket', \App\Http\Controllers\Tiket\TiketController::class);
    });
});

Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'admin', 'middleware' => ['permission:posting-read']], function () {
        Route::group(['prefix' => 'agenda', 'as' => 'agenda:'], function () {
            Route::resource('harian', AgendaController::class);
        });
        Route::group(['prefix' => 'zoom', 'as' => 'zoom:'], function () {
            Route::resource('link_zoom', ZoomController::class);
        });
        Route::group(['prefix' => 'buku', 'as' => 'buku:'], function () {
            Route::resource('tamu', BukuTamuController::class);
        });
    });

    Route::group(['prefix' => 'inventory', 'as' => 'inventory:'], function () {
        Route::resource('satuan', SatuanController::class);
        Route::resource('barang', BarangController::class);
        Route::resource('peminjaman', PeminjamanController::class);
        Route::resource('kategori', KategoriController::class);
    });

    Route::group(['middleware' => ['permission:posting-read']], function () {
        Route::resource('posting', PostingController::class);
        Route::resource('halaman', HalamanController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('infohoax', InfohoaxController::class);
        Route::resource('infografis', InfografisController::class);
    });

    Route::group(['middleware' => ['permission:menu_depan-read'], 'prefix' => "admin"], function () {
        // Route::resource('gallery', GalleryController::class);
        Route::resource('lampirans', LampiranController::class);
        Route::resource('menuberanda', MenuBerandaController::class);
        Route::resource('pengumumans', PengumumanController::class);
        Route::resource('sampul', SampulController::class);
        // Route::resource('website', WebsiteController::class);
        // Route::resource('youtube', YoutubeController::class);
    });


    Route::resource('user', UserController::class);
    Route::resource('account', AccountController::class);
    Route::resource('role', RoleController::class);


    Route::group(['middleware' => ['permission:layanan-read'], 'prefix' => "admin"], function () {
        // Route::resource('komentar', KomentarController::class);
        // Route::resource('pengaduans', PengaduanController::class);
        Route::resource('media-publikasi', MediaPublikasiController::class);
        Route::resource('liputan', LiputanController::class);
        Route::resource('informasi-publik', InformasiPublikController::class);
        Route::resource('pengajuan-keberatan', PengajuanKeberatanController::class);
        Route::resource('pinjam-tempat', PinjamTempatController::class);
        Route::resource('pinjam-peralatan', PinjamPeralatanController::class);
        Route::resource('magang', PermohonanMagangController::class);
    });

    Route::group(['middleware' => ['auth'], 'prefix' => "admin"], function () {
        Route::resource('media', MediaController::class);
    });

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});


Route::group(['prefix' => 'tower'], function () {
    Route::get('peta', [\App\Http\Controllers\Tower\PetaController::class, 'index']);
    //    Route::get('peta', [\App\Http\Controllers\Tower\PetaController::class, 'index']);
});

// Route::get('/admin', function() {
//     return view('admin');
// });
