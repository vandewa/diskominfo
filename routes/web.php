<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Home;
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
use Carbon\Carbon;

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
Route::resource('home', HomeController::class);
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/tupoksi', [HomeController::class, 'tupoksi'])->name('tupoksi');
Route::get('/lampiran', [HomeController::class, 'lampiran'])->name('lampiran');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/hubungikami', [HomeController::class, 'hubungikami'])->name('hubungikami');
Route::post('/hubungikami/simpan', [HomeController::class, 'simpan'])->name('hubungikami.simpan');
Route::get('/lampiran/list', [HomeController::class, 'getLampiran'])->name('lampiran.list');
Route::get('/detail/{post}', [HomeController::class, 'detail'])->name('detail.posting');
Route::get('/search', [HomeController::class, 'cari'])->name('search');
Route::get('/kategori/{post}', [HomeController::class, 'kategori'])->name('kategori.posting');
Route::get('/uploadby/{post}', [HomeController::class, 'uploadby'])->name('uploadby.posting');
Route::get('/posting/list', [PostingController::class, 'getPosting'])->name('posting.list');
Route::get('/posting/logout', [PostingController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('posting', PostingController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('menuberanda', MenuBerandaController::class);
    Route::resource('youtube', YoutubeController::class);
    Route::resource('lampirans', LampiranController::class);
    Route::resource('komentar', KomentarController::class);
    Route::resource('user', UserController::class);
    Route::resource('account', AccountController::class);
    Route::resource('gallery', GalleryController::class);
});

// Route::get('/admin', function() {
//     return view('admin');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'], function () {
    return view('dashboard');})->name('dashboard');

