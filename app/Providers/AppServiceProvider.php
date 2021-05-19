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
      

         $categories=Menu::with(['childs'])
         ->where('parent', '=', '0') 
         ->get();

         View::share('menu_categories', $categories);


          $categories=Menu::with(['childs'])
         ->where('parent', '=', '9') 
         ->get();

         View::share('menu_categoriess', $categories);


        $status_pengaduan=Pengaduan::where('status', '=', '0') 
         ->count();

         View::share('status_pengaduan', $status_pengaduan);

         $status_komentar=Komentar::where('status', '=', '0') 
         ->count();

         View::share('status_komentar', $status_komentar);

      

          
    }


}
