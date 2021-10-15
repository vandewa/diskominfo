<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\TiketController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('tiket', [TiketController::class, 'getTiket']);
    Route::get('tiket/belum-selesai', [TiketController::class, 'getTiketBelumSelesai']);
    Route::get('tiket/sudah-selesai', [TiketController::class, 'getTiketSudahSelesai']);
    Route::get('tiket/detail/{id}',[TiketController::class, 'tiketDetail']);
    Route::post('tiket/update/{id}', [TiketController::class, 'tiketUpdate']);
});

// Route::post('logout', 'AuthController@logout');
// Route::post('refresh', 'AuthController@refresh');
// Route::post('me', 'AuthController@me');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return auth('api')->user();
});
