<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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
Route::get('/detail/{post}', [HomeController::class, 'detail']);

Route::get('/posting/list', [PostingController::class, 'getPosting'])->name('posting.list');

Route::resource('posting', PostingController::class);
Route::resource('user', UserController::class);
Route::resource('home', HomeController::class);


Route::get('/admin', function() {
    return view('admin');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

