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

    $status_pengaduan = Pengaduan::where('status', '=', '0')
      ->count();
    View::share('status_pengaduan', $status_pengaduan);

    $status_komentar = Komentar::where('status', '=', '0')
      ->count();
    View::share('status_komentar', $status_komentar);

    $total_layanan = $status_komentar + $status_pengaduan;
    View::share('total_layanan', $total_layanan);

    $akses_dc = AksesDc::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('akses_dc', $akses_dc);

    $colocation_server = ColocationServer::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('colocation_server', $colocation_server);

    $kunjungan_dc = KunjunganDc::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('kunjungan_dc', $kunjungan_dc);

    $layanan_server = LayananServer::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('layanan_server', $layanan_server);

    $vps_baru = PenambahanVps::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('vps_baru', $vps_baru);

    $perubahan_vps = PerubahanVps::where('status_st', '=', 'STATUS_ST_01')
      ->count();
    View::share('perubahan_vps', $perubahan_vps);

    $total_perizinan = $akses_dc + $colocation_server + $kunjungan_dc + $layanan_server + $vps_baru + $perubahan_vps;
    View::share('total_perizinan', $total_perizinan);


    $total_pengunjung = DB::table('visitor')
    ->count();
    View::share('total_pengunjung', $total_pengunjung);
  }
}
