<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Pengaduan;
use App\Models\Komentar;
use App\Models\AksesDc;
use App\Models\ColocationServer;
use App\Models\KunjunganDc;
use App\Models\LayananServer;
use App\Models\PenambahanVps;
use App\Models\PerubahanVps;
use App\Models\MediaPublikasi;
use App\Models\Liputan;
use App\Models\PermohonanInformasiPublik;
use App\Models\PengajuanKeberatan;
use App\Models\PinjamTempat;
use App\Models\PinjamPeralatan;
use App\Models\PermohonanMagang;
use App\Models\JaringanInternet;
use App\Models\PermohonanAplikasi;
use App\Models\PermintaanColocation;
use App\Models\PermohonanSubdomain;
use App\Models\Zoom;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Paginator::useBootstrap();
    config(['app.locale' => 'id']);
    Carbon::setLocale('id');
    date_default_timezone_set('Asia/Jakarta');

    $total = DB::table('posting')
      ->orderBy('views')
      ->count();
    View::share('key', $total);

    $categories = Menu::with(['childs'])
      ->where('parent', '=', '47')
      ->get();
    View::share('menu_categories', $categories);

    $categories = Menu::with(['childs'])
      ->where('parent', '=', '9')
      ->get();
    View::share('menu_categoriess', $categories);

    $ppid = Menu::with(['childs'])
      ->where('parent', '=', '120')
      ->get();
    View::share('ppid', $ppid);

    // $status_pengaduan = Pengaduan::where('status', '=', '0')
    //   ->count();
    // View::share('status_pengaduan', $status_pengaduan);

    // $status_komentar = Komentar::where('status', '=', '0')
    //   ->count();
    // View::share('status_komentar', $status_komentar);

    // $total_layanan = $status_komentar + $status_pengaduan;
    // View::share('total_layanan', $total_layanan);

    // $akses_dc = AksesDc::where('status_st', '=', 'STATUS_ST_01')
    //   ->count();
    // View::share('akses_dc', $akses_dc);

    // $colocation_server = ColocationServer::where('status_st', '=', 'STATUS_ST_01')
    //   ->count();
    // View::share('colocation_server', $colocation_server);

    // $kunjungan_dc = KunjunganDc::where('status_st', '=', 'STATUS_ST_01')
    //   ->count();
    // View::share('kunjungan_dc', $kunjungan_dc);

    // $layanan_server = LayananServer::where('status_st', '=', 'STATUS_ST_01')
    //   ->count();
    // View::share('layanan_server', $layanan_server);

    // $vps_baru = PenambahanVps::where('status_st', '=', 'STATUS_ST_01')
    //   ->count();
    // View::share('vps_baru', $vps_baru);

    // $perubahan_vps = PerubahanVps::where('status_st', '=', 'STATUS_ST_01')
    //   ->count();
    // View::share('perubahan_vps', $perubahan_vps);

    // $total_perizinan = $akses_dc + $colocation_server + $kunjungan_dc + $layanan_server + $vps_baru + $perubahan_vps;
    // View::share('total_perizinan', $total_perizinan);

    $media_publikasi = MediaPublikasi::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('media_publikasi', $media_publikasi);

    $liputan = Liputan::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('liputan', $liputan);

    $informasi_publik = PermohonanInformasiPublik::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('informasi_publik', $informasi_publik);

    $pengajuan_keberatan = PengajuanKeberatan::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('pengajuan_keberatan', $pengajuan_keberatan);

    $tempat_rapat = PinjamTempat::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('tempat_rapat', $tempat_rapat);

    $pinjam_peralatan = PinjamPeralatan::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('pinjam_peralatan', $pinjam_peralatan);

    $magang = PermohonanMagang::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('magang', $magang);

    $zoom = Zoom::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('zoom', $zoom);

    $internet = JaringanInternet::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('internet', $internet);

    $aplikasi = PermohonanAplikasi::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('aplikasi', $aplikasi);

    $subdomain = PermohonanSubdomain::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('subdomain', $subdomain);

    $colocation = PermintaanColocation::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('colocation', $colocation);

    $total_layanan = $media_publikasi + $liputan + $informasi_publik + $pengajuan_keberatan + $tempat_rapat + $pinjam_peralatan + $magang + $zoom + $internet + $aplikasi + $subdomain + $colocation;
    View::share('total_layanan', $total_layanan);

    $total_pengunjung = DB::table('visitor')
    ->count();
    View::share('total_pengunjung', $total_pengunjung);

    $total_user = DB::table('users')
    ->count();
    View::share('total_user', $total_user);

    $file_download = DB::table('lampiran')
    ->count();
    View::share('file_download', $file_download);
  }
}
