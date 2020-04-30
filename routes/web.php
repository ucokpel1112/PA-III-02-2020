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

// Route::get('/eventkalender', function () {
//     return view('front.eventkalender');
// })->name('event');
Route::get('/eventkalender','KalendereventController@customer_all')->name('eventkalender');
Route::get('/detail-event', function () {
    return view('front.detail-eventkalender');
})->name('event');
//admin

Route::get('/adm/dashboard', function () {
    return view('layout.admin.dashboard');
});

//kalender
Route::get('/adm/listkalender','KalendereventController@index')->name('listkalender');
Route::get('/adm/addkalender',function(){
    return view('admin.kalender.tambahkalender');
});
// Route::get('/adm/listkalender',function(){
//     return view('admin.kalender.eventkalender');
// });
Route::post('/adm/tambahkalender','KalendereventController@store')->name('tambahkalender');
Route::put('/adm/updatekalender/{id_kalenderevent}/utama/update','KalendereventController@update')->name('updatekalender');
Route::get('/adm/updatekalender',function(){
    return view('admin.kalender.updatekalender');
});




Route::get('/paket', function () {
    return view('front.view-paket');
})->name('paket');
Route::get('/detail-paket', function () {
    return view('front.detail-paket');
})->name('paket.detail');
