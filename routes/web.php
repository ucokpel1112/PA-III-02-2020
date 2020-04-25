<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/eventkalender', function () {
    return view('front.eventkalender');
})->name('event');

Route::get('/adm/dashboard',function(){
    return view('layout.admin.dashboard');
});
Route::get('/adm/kalender/listkalender',function(){
    return view('admin.kalender-event.eventkalender');
});
Route::get('/adm/kalender/addkalender',function(){
    return view('admin.kalender-event.tambahkalender');
});
Route::get('/adm/kalender/updatekalender',function(){
    return view('admin.kalender-event.updatekalender');
});
Route::get('/paket', function () {
    return view('front.view-paket');
})->name('paket');
Route::get('/detail-paket', function () {
    return view('front.detail-paket');
})->name('paket.detail');

//Paket Wisata admin
Route::get('/adm/paket','PaketWisataController@index')->name('admin.paket');
Route::get('/adm/paket/edit',function(){
    return view('admin.paket.edit_paket_wisata');
});
Route::get('/adm/paket/detail',function(){
    return view('admin.paket.detail_paket_wisata');
});
Route::get('/adm/paket/add','PaketWisataController@create')->name('admin.paket.tambah');
Route::delete('/adm/paket/{id_paket}','PaketWisataController@destroy')->name('admin.paket.hapus');
