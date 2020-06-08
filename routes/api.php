<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('pemesanan/detail/{id_pemesanan}','Front\PemesananController@getDataPemesanan')->name('data.transaksi');
Route::post('pemesanan/{id_pemesanan}/update-status','Front\PemesananController@updateStatus');
