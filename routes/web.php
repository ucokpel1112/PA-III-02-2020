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
Route::get('/eventkalender', 'KalendereventController@customer_all')->name('eventkalender');
Route::get('/detail-event', function () {
    return view('front.detail-eventkalender');
})->name('event');
//admin

Route::get('/adm/dashboard', function () {
    return view('layout.admin.dashboard');
});
//kalender
Route::get('/adm/kalender/listkalender', 'KalendereventController@index')->name('listkalender');
Route::get('/adm/kalender/addkalender', function () {
    return view('admin.kalender.tambahkalender');
});
// Route::get('/adm/listkalender',function(){
//     return view('admin.kalender.eventkalender');
// });
Route::post('/adm/tambahkalender', 'KalendereventController@store')->name('tambahkalender');
Route::put('/adm/updatekalender/{id_kalenderevent}/utama/update', 'KalendereventController@update')->name('updatekalender');
Route::get('/adm/updatekalender', function () {
    return view('admin.kalender.updatekalender');
});
//paket wisata Customer
Route::namespace('Front')->group(function () {
    //paket
    Route::get('/paket', 'PaketWisataController@index')->name('paket');
    Route::post('/paket', 'PaketWisataController@indexFilter')->name('paket.filter');
    Route::get('/paket/detail/{id_paket}', 'PaketWisataController@show')->name('paket.detail');
    //pemesanan
    Route::get('/pemesanan', 'PemesananController@index')->name('pemesanan');
    Route::put('/paket/{id_paket}/pesan', 'PemesananController@store')->name('paket.pesan');
    Route::put('/pemesanan/detail/{id_pemesanan}/upload', 'PemesananController@kirimTransaksi')->name('transaksi.kirim');
    Route::get('/pemesanan/detail/{id_pemesanan}', 'PemesananController@show')->name('pemesanan.detail');
    Route::delete('/pemesanan/cancel/{id_pemesanan}', 'PemesananController@cancel')->name('pemesanan.batal');
});


//Paket Wisata admin
Route::namespace('Admin')->group(function () {
    //sesi
    Route::get('/adm/sesi/add/{id_paket}', 'PaketWisataController@createSesi')->name('admin.sesi.create');
    Route::put('/adm/sesi/{id_paket}', 'PaketWisataController@storeSesi')->name('admin.sesi.store');
    Route::get('/adm/sesi/edit/{id_sesi}', 'PaketWisataController@editSesi')->name('admin.sesi.edit');
    Route::put('/adm/sesi/edit/{id_sesi}/update', 'PaketWisataController@updateSesi')->name('admin.sesi.update');
    Route::delete('/adm/sesi/delete/{id_sesi}', 'PaketWisataController@destroySesi')->name('admin.sesi.delete');


    //pemesanan
    Route::get('/adm/pemesanan', 'PemesananController@index')->name('admin.pemesanan');
    Route::get('/adm/pemesanan/show/{id_pemesanan}', 'PemesananController@show')->name('admin.pemesanan.show');
    Route::post('/adm/pemesanan', 'PemesananController@indexFilter')->name('admin.pemesanan.filter');
    Route::put('/adm/pemesanan/transaksi/konfirmasi/{id_pemesanan}', 'PemesananController@konfirmasiPembayaran')->name('admin.pemesanan.konfirmasi');
    Route::put('/adm/pemesanan/ubahPesan/{id_pemesanan}', 'PemesananController@ubahPesan')->name('admin.pemesanan.ubahPesan');

    Route::get('/adm/paket', 'PaketWisataController@index')->name('admin.paket');
//edit paket
    Route::get('/adm/paket/edit/{id_paket}/choice', 'PaketWisataController@editChoice')->name('admin.paket.editChoice');

    Route::get('/adm/paket/edit/{id_paket}/utama', 'PaketWisataController@edit')->name('admin.paket.edit');
    Route::put('/adm/paket/edit/{id_paket}/utama/update', 'PaketWisataController@update')->name('admin.paket.update');

    Route::get('/adm/paket/edit/{id_paket}/ini', 'PaketWisataController@editIni')->name('admin.paket.ini');
    Route::get('/adm/paket/edit/{id_ini}/ini/hapus', 'PaketWisataController@hapusIni')->name('admin.paket.hapus.ini');
    Route::put('/adm/paket/edit/{id_paket}/ini/update', 'PaketWisataController@updateIni')->name('admin.paket.update.ini');

    Route::get('/adm/paket/edit/{id_paket}/layanan', 'PaketWisataController@editLayanan')->name('admin.paket.layanan');
    Route::get('/adm/paket/edit/{id_layanan}/{id_paket}/layanan/hapus', 'PaketWisataController@hapusLayanan')->name('admin.paket.hapus.layanan');
    Route::put('/adm/paket/edit/{id_paket}/layanan/update', 'PaketWisataController@updateLayanan')->name('admin.paket.update.layanan');


//view Paket
    Route::get('/adm/paket/show/{id_paket}', 'PaketWisataController@show')->name('admin.paket.show');

//craete new paket
    Route::get('/adm/paket/add', 'PaketWisataController@create')->name('admin.paket.tambah');
    Route::post('/adm/paket', 'PaketWisataController@store')->name('admin.paket.store');
//hapus
    Route::delete('/adm/paket/delete/{id_paket}', 'PaketWisataController@destroy')->name('admin.paket.hapus');

});
//anggota CBT

Route::namespace('AnggotaCBT')->group(function () {
    Route::get('anggotacbt/dashboard', function () {
        return view('layout.anggotacbt.dashboard');
    });


//Layanan Wisata
    Route::get('anggotacbt/layananwisata', 'LayananWisataController@index')->name('anggotacbt.layanan');
    Route::post('anggotacbt/layananwisata/create', 'LayananWisataController@create')->name('anggotacbt.layanan.tambah');
    Route::get('anggotacbt/layananwisata/{id}/edit', 'LayananWisataController@edit')->name('anggotacbt.layanan.edit');
    Route::post('anggotacbt/layanan_wisata/{id}/update', 'LayananWisataController@update')->name('anggotacbt.layanan.update');
    Route::get('anggotacbt/layanan_wisata/{id}/delete', 'LayananWisataController@delete')->name('anggotacbt.layanan.delete');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
