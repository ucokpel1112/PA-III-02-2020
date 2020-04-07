<?php

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
    return view('eventkalender');
});

Route::get('/adm/dashboard',function(){
    return view('layouts_admin/dashboard');
});
Route::get('/adm/eventkalender',function(){
    return view('layouts_admin/eventkalender');
});
Route::get('/adm/addkalender',function(){
    return view('layouts_admin/tambahkalender');
});