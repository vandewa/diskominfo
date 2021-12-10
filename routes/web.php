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

use App\Http\Controllers\Inventory\KategoriController;




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
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/personil', [HomeController::class, 'personil'])->name('personil');
Route::get('/tupoksi', [HomeController::class, 'tupoksi'])->name('tupoksi');
Route::get('/lampiran', [HomeController::class, 'lampiran'])->name('lampiran');
Route::get('/pengaduan', [HomeController::class, 'pengaduan'])->name('pengaduan');
Route::get('/pengajuan', [HomeController::class, 'pengajuan'])->name('pengajuan');
Route::get('/pengajuanizin', [HomeController::class, 'pengajuanizin'])->name('pengajuanizin');
Route::post('/pengajuan/simpan', [HomeController::class, 'simpan'])->name('pengajuan.simpan');
Route::get('/website/list', [HomeController::class, 'getWebsite'])->name('website.list');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/kominfo/{id}', [HomeController::class, 'kominfo'])->name('kominfo');
Route::get('/detail/{post:slug}', [HomeController::class, 'detail'])->name('detail.posting');
Route::get('/details/{post}', [HomeController::class, 'details'])->name('details.pengumuman');
Route::get('/search', [HomeController::class, 'cari'])->name('search');
Route::get('/kategori/{post}', [HomeController::class, 'kategori'])->name('kategori.posting');
Route::get('/uploadby/{post}', [HomeController::class, 'uploadby'])->name('uploadby.posting');
Route::get('/posting/checkSlug', [PostingController::class, 'checkSlug'])->middleware('auth');
Route::get('/posting/{id}/checkSlug', [PostingController::class, 'checkSlug'])->middleware('auth');
Route::get('/posting/logout', [PostingController::class, 'logout'])->name('logout');
Route::get('/posting/list', [PostingController::class, 'getPosting'])->name('posting.list');
Route::get('/infohoax/list', [InfohoaxController::class, 'getInfohoax'])->name('infohoax.list');
Route::get('/infohoax/daftar', [HomeController::class, 'daftarInfohoax'])->name('infohoax.daftar');
Route::get('/infografis/list', [InfografisController::class, 'getInfografis'])->name('infografis.list');
Route::get('/infografis/detail', [HomeController::class, 'detailInfografis'])->name('infografis.detail');
Route::get('/category/list', [CategoryController::class, 'getCategory'])->name('category.list');
Route::get('/lampiran/list', [HomeController::class, 'getLampiran'])->name('lampiran.list');
Route::get('/lampirans/list', [LampiranController::class, 'getLampirans'])->name('lampirans.list');
Route::get('/user/list', [UserController::class, 'getUser'])->name('user.list');
Route::get('/gallery/list', [GalleryController::class, 'getGallery'])->name('gallery.list');
Route::get('/youtube/list', [YoutubeController::class, 'getYoutube'])->name('youtube.list');
Route::get('/komentar/list', [KomentarController::class, 'getKomentar'])->name('komentar.list');
Route::get('/menuberanda/list', [MenuBerandaController::class, 'getMenuBeranda'])->name('menuberanda.list');
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
    });
    Route::resource('akses-data-center', AksesDcController::class);
    Route::resource('layanan-server', LayananServerController::class);
    Route::resource('vps-baru', PenambahanVpsController::class);
    Route::resource('perubahan-vps', PerubahanVpsController::class);
    Route::resource('colocation-server', PerminColController::class);
    Route::resource('kunjungan-data-center', KunjunganDcController::class);
    Route::resource('pengajuan-server', PengajuanServerController::class);
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
    Route::group(['prefix' => 'inventory', 'as' => 'inventory:'], function () {
        Route::resource('satuan', SatuanController::class);
        Route::resource('barang', BarangController::class);
        Route::resource('peminjaman', PeminjamanController::class);
        Route::resource('kategori', KategoriController::class);
    });

    Route::group(['middleware' => ['permission:posting-read']], function () {
        Route::resource('posting', PostingController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('infohoax', InfohoaxController::class);
        Route::resource('infografis', InfografisController::class);
    });

    Route::group(['middleware' => ['permission:menu_depan-read']], function () {
        Route::resource('gallery', GalleryController::class);
        Route::resource('lampirans', LampiranController::class);
        Route::resource('menuberanda', MenuBerandaController::class);
        Route::resource('pengumumans', PengumumanController::class);
        Route::resource('sampul', SampulController::class);
        Route::resource('website', WebsiteController::class);
        Route::resource('youtube', YoutubeController::class);
    });

    Route::group(['middleware' => ['permission:users-read']], function () {
        Route::resource('user', UserController::class);
        Route::resource('account', AccountController::class);
    });

    Route::group(['middleware' => ['permission:layanan-read']], function () {
        Route::resource('komentar', KomentarController::class);
        Route::resource('pengaduans', PengaduanController::class);
    });
});

Route::group(['prefix' => 'tower'], function () {
    Route::get('peta', [\App\Http\Controllers\Tower\PetaController::class, 'index']);
    //    Route::get('peta', [\App\Http\Controllers\Tower\PetaController::class, 'index']);
});

// Route::get('/admin', function() {
//     return view('admin');
// });
