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


Route::get('/eventkalender','KalendereventController@customer_all')->name('eventkalender');
Route::get('/','HomeController@getforIndex')->name('home');

Route::get('/detail-event', function () {
    return view('front.detail-eventkalender');
})->name('event');


//admin
Route::get('/adm/dashboard',function(){
    return view('admin.dashboard');
});
//kalender
Route::get('/adm/listkalender','KalendereventController@index')->name('listkalenders');
Route::get('/adm/addkalender',function(){
    return view('admin.kalender.tambahkalender');
});

Route::post('/adm/tambahkalender','KalendereventController@store')->name('tambahkalender');
Route::put('/adm/updatekalender/{id_kalenderevent}/utama/update','KalendereventController@update')->name('updatekalender');
Route::get('/adm/updatekalender/{id_kalenderevent}','KalendereventController@edit')->name('editkalender');
//Route::get('/adm/','HomeController@getforIndex')->name('home');

//detail customer
Route::get('/eventkalender/detail/show/{id_kalenderevent}','KalendereventController@detail')->name('detail-eventkalender');
Route::get('/adm/detailkalender/detail/show/{id_kalenderevent}','KalendereventController@admin_detail')->name('detail-admin');

Route::delete('/adm/eventkalender/delete/{id_kalenderevent}','KalendereventController@destroy')->name('delete-eventkalender');

//dashboard
Route::get('/adm/dashboard','DashboardController@count_kalender')->name('count-kalender');
Route::get('/paket', function () {
    return view('front.view-paket');
})->name('paket');
Route::get('/detail-paket', function () {
    return view('front.detail-paket');
})->name('paket.detail');
