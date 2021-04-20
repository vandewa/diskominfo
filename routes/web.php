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

Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/visimisi', [HomeController::class, 'visimisi']);
Route::get('/struktur', [HomeController::class, 'struktur']);
Route::get('/tupoksi', [HomeController::class, 'tupoksi']);
Route::get('/lampiran', [HomeController::class, 'lampiran']);
Route::get('/hubungikami', [HomeController::class, 'hubungikami']);
Route::post('/hubungikami/simpan', [HomeController::class, 'simpan']);
Route::get('/lampiran/list', [HomeController::class, 'getLampiran'])->name('lampiran.list');
Route::get('/detail/{post}', [HomeController::class, 'detail']);
Route::get('/search', [HomeController::class, 'cari']);
Route::get('/kategori/{post}', [HomeController::class, 'kategori']);
Route::get('/posting/list', [PostingController::class, 'getPosting'])->name('posting.list');
Route::get('/posting/logout', [PostingController::class, 'logout']);
Route::resource('posting', PostingController::class);
Route::resource('category', CategoryController::class);
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);
Route::post('/category/{id}/edit', [CategoryController::class, 'update']);
Route::resource('lampirans', LampiranController::class);
Route::get('/lampirans/delete/{id}', [LampiranController::class, 'destroy']);
Route::post('/lampirans/{id}/edit', [LampiranController::class, 'update']);
Route::resource('komentar', KomentarController::class);
Route::get('/komentar/delete/{id}', [ KomentarController::class, 'destroy']);
Route::post('/komentar/{id}/edit', [ KomentarController::class, 'update']);
Route::resource('user', UserController::class);
Route::get('/user/delete/{id}', [UserController::class, 'destroy']);
Route::post('/user/{id}/edit', [UserController::class, 'update']);
Route::resource('home', HomeController::class);
Route::post('/account/{id}/edit', [AccountController::class, 'update']);
Route::resource('account', AccountController::class);

Route::get('/admin', function() {
    return view('admin');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'], function () {
    return view('dashboard');})->name('dashboard');

