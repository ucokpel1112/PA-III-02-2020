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


Route::get('/','HomeController@home')->name('home.customer');
Route::get('/home','HomeController@index');

Route::get('/eventkalender', 'KalendereventController@customer_all')->name('eventkalender');

Route::get('/detail-event', function () {
    return view('front.detail-eventkalender');
})->name('event');


//kalender
Route::get('/adm/kalender/listkalender', ['middleware'=>'check-permission:admin','uses'=>'KalendereventController@index'])->name('listkalender');
Route::get('/adm/kalender/addkalender', function () {
    return view('admin.kalender.tambahkalender');
});
//['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']
Route::post('/adm/tambahkalender', ['middleware'=>'check-permission:admin','uses'=>'KalendereventController@store'])->name('tambahkalender');
Route::put('/adm/updatekalender/{id_kalenderevent}/utama/update', ['middleware'=>'check-permission:admin','uses'=>'KalendereventController@update'])->name('updatekalender');
Route::get('/adm/updatekalender/{id_kalenderevent}', ['middleware'=>'check-permission:admin','uses'=>'KalendereventController@edit'])->name('editkalender');

//detail customer
Route::get('/eventkalender/detail/show/{id_kalenderevent}', 'KalendereventController@detail')->name('detail-eventkalender');
Route::get('/adm/detailkalender/detail/show/{id_kalenderevent}', ['middleware'=>'check-permission:admin','uses'=>'KalendereventController@admin_detail'])->name('detail-admin');

Route::delete('/adm/eventkalender/delete/{id_kalenderevent}', ['middleware'=>'check-permission:admin','uses'=>'KalendereventController@destroy'])->name('delete-eventkalender');


//paket wisata Customer
Route::namespace('Front')->group(function () {
    //paket
    Route::get('/paket', 'PaketWisataController@index')->name('paket');
    Route::post('/paket', 'PaketWisataController@indexFilter')->name('paket.filter');
    Route::get('/paket/kabupaten/{id_kabupaten}', 'PaketWisataController@indexFilterKabupaten')->name('paket.filter.kabupaten');
    Route::get('/paket/detail/{id_paket}', 'PaketWisataController@show')->name('paket.detail');
    //pemesanan
    Route::get('/pemesanan', ['middleware'=>'check-permission:customer','uses'=>'PemesananController@index'])->name('pemesanan');
    Route::put('/paket/{id_paket}/pesan', ['middleware'=>'check-permission:customer','uses'=>'PemesananController@store'])->name('paket.pesan');
    Route::put('/pemesanan/detail/{id_pemesanan}/upload', ['middleware'=>'check-permission:customer','uses'=>'PemesananController@kirimTransaksi'])->name('transaksi.kirim');
    Route::put('/pemesanan/detail/{id_transaksi}/update', ['middleware'=>'check-permission:customer','uses'=>'PemesananController@updateTransaksi'])->name('transaksi.update');
    Route::get('/pemesanan/detail/{id_pemesanan}', ['middleware'=>'check-permission:customer','uses'=>'PemesananController@show'])->name('pemesanan.detail');
    Route::delete('/pemesanan/cancel/{id_pemesanan}', ['middleware'=>'check-permission:customer','uses'=>'PemesananController@cancel'])->name('pemesanan.batal');
});


//Paket Wisata admin
Route::namespace('Admin')->group(function () {
   //member
    Route::get('/adm/member',['middleware'=>'check-permission:admin','uses'=>'MemberController@index'])->name('member');
    Route::post('/adm/member',['middleware'=>'check-permission:admin','uses'=>'MemberController@indexFilterM'])->name('member.filter');
    Route::get('/adm/member/request',['middleware'=>'check-permission:admin','uses'=>'MemberController@index'])->name('member.request');
    Route::post('/adm/member/request',['middleware'=>'check-permission:admin','uses'=>'MemberController@indexFilterR'])->name('member.request.filter');
    Route::get('/adm/member/request/terima/{id_member}',['middleware'=>'check-permission:admin','uses'=>'MemberController@terima'])->name('member.request.terima');
    Route::get('/adm/member/request/tolak/{id_member}',['middleware'=>'check-permission:admin','uses'=>'MemberController@tolak'])->name('member.request.tolak');
    Route::get('/adm/member/request/hapus/{id_member}',['middleware'=>'check-permission:admin','uses'=>'MemberController@hapus'])->name('member.request.hapus');
    Route::get('/adm/member/request/detail/{id_member}',['middleware'=>'check-permission:admin','uses'=>'MemberController@showRequest'])->name('member.request.detail');
    Route::get('/adm/member/detail/{id_member}',['middleware'=>'check-permission:admin','uses'=>'MemberController@show'])->name('member.detail');
    Route::post('/adm/member/add',['middleware'=>'check-permission:admin','uses'=>'MemberController@store'])->name('member.tambah');
    Route::get('/adm/member/aktif/{id_member}',['middleware'=>'check-permission:admin','uses'=>'MemberController@aktifkanStatus'])->name('member.aktifkan');
    Route::get('/adm/member/non-aktif/{id_member}',['middleware'=>'check-permission:admin','uses'=>'MemberController@nonAktif'])->name('member.nonaktifkan');


    //dashboard
    Route::get('/adm/dashboard', ['middleware'=>'check-permission:admin','uses'=>'DashboardController@count'])->name('home.admin');

    //sesi
    Route::get('/adm/sesi/add/{id_paket}', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@createSesi'])->name('admin.sesi.create');
    Route::put('/adm/sesi/{id_paket}', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@storeSesi'])->name('admin.sesi.store');
    Route::get('/adm/sesi/edit/{id_sesi}', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@editSesi'])->name('admin.sesi.edit');
    Route::put('/adm/sesi/edit/{id_sesi}/update', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@updateSesi'])->name('admin.sesi.update');
    Route::delete('/adm/sesi/delete/{id_sesi}', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@destroySesi'])->name('admin.sesi.delete');
    Route::delete('/adm/sesi/nonaktif/{id_sesi}', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@nonaktifSesi'])->name('admin.sesi.nonaktif');


    //pemesanan
    Route::get('/adm/pemesanan', ['middleware'=>'check-permission:admin','uses'=>'PemesananController@index'])->name('admin.pemesanan');
    Route::get('/adm/pemesanan/show/{id_pemesanan}', ['middleware'=>'check-permission:admin','uses'=>'PemesananController@show'])->name('admin.pemesanan.show');
    Route::post('/adm/pemesanan', ['middleware'=>'check-permission:admin','uses'=>'PemesananController@indexFilter'])->name('admin.pemesanan.filter');
    Route::put('/adm/pemesanan/transaksi/konfirmasi/{id_pemesanan}', ['middleware'=>'check-permission:admin','uses'=>'PemesananController@konfirmasiPembayaran'])->name('admin.pemesanan.konfirmasi');
    Route::put('/adm/pemesanan/transaksi/tolak/{id_pemesanan}', ['middleware'=>'check-permission:admin','uses'=>'PemesananController@tolakPembayaran'])->name('admin.pemesanan.tolak');
    Route::put('/adm/pemesanan/transaksi/upload/{id_pemesanan}', ['middleware'=>'check-permission:admin','uses'=>'PemesananController@uploadUlangPembayaran'])->name('admin.pemesanan.upload');
    Route::put('/adm/pemesanan/ubahPesan/{id_pemesanan}', ['middleware'=>'check-permission:admin','uses'=>'PemesananController@ubahPesan'])->name('admin.pemesanan.ubahPesan');

    Route::get('/adm/paket', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@index'])->name('admin.paket');
//edit paket
    Route::get('/adm/paket/edit/{id_paket}/choice', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@editChoice'])->name('admin.paket.editChoice');

    Route::get('/adm/paket/edit/{id_paket}/utama', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@edit'])->name('admin.paket.edit');
    Route::put('/adm/paket/edit/{id_paket}/utama/update', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@update'])->name('admin.paket.update');

    Route::get('/adm/paket/edit/{id_paket}/ini', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@editIni'])->name('admin.paket.ini');
    Route::get('/adm/paket/edit/{id_ini}/ini/hapus', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@hapusIni'])->name('admin.paket.hapus.ini');
    Route::put('/adm/paket/edit/{id_paket}/ini/update', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@updateIni'])->name('admin.paket.update.ini');

    Route::get('/adm/paket/edit/{id_paket}/layanan', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@editLayanan'])->name('admin.paket.layanan');
    Route::get('/adm/paket/edit/{id_layanan}/{id_paket}/layanan/hapus', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@hapusLayanan'])->name('admin.paket.hapus.layanan');
    Route::put('/adm/paket/edit/{id_paket}/layanan/update', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@updateLayanan'])->name('admin.paket.update.layanan');


//view Paket
    Route::get('/adm/paket/show/{id_paket}', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@show'])->name('admin.paket.show');

//craete new paket
    Route::get('/adm/paket/add', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@create'])->name('admin.paket.tambah');
    Route::post('/adm/paket', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@store'])->name('admin.paket.store');
//hapus
    Route::delete('/adm/paket/delete/{id_paket}', ['middleware'=>'check-permission:admin','uses'=>'PaketWisataController@destroy'])->name('admin.paket.hapus');

});
//anggota CBT


Route::namespace('AnggotaCBT')->group(function () {
    Route::get('anggotacbt/dashboard','AnggotaCBTController@count')->name('home.anggotacbt');

    //Layanan Wisata
    Route::get('anggotacbt/layananwisata', ['middleware'=>'check-permission:member','uses'=>'LayananWisataController@index'])->name('anggotacbt.layanan');
    Route::post('anggotacbt/layananwisata/create', ['middleware'=>'check-permission:member','uses'=>'LayananWisataController@create'])->name('anggotacbt.layanan.tambah');
    Route::get('anggotacbt/layananwisata/{id}/edit', ['middleware'=>'check-permission:member','uses'=>'LayananWisataController@edit'])->name('anggotacbt.layanan.edit');
    Route::put('anggotacbt/layanan_wisata/{id}/update', ['middleware'=>'check-permission:member','uses'=>'LayananWisataController@update'])->name('anggotacbt.layanan.update');
    Route::get('anggotacbt/layanan_wisata/{id}/delete', ['middleware'=>'check-permission:member','uses'=>'LayananWisataController@delete'])->name('anggotacbt.layanan.delete');

});

Auth::routes();
Route::namespace('Auth')->group(function () {
    Route::get('register/menu/pilih', 'RegisterController@choice')->name('register.choice');
    Route::get('konfirmasiemail/{email}/{token}', 'RegisterController@konfirmasiemail')->name('konfirmasiemail');
});



//komunitas admin
Route::get('/adm/komunitas',['middleware'=>'check-permission:admin','uses'=>'KomunitasController@index'])->name('data_komunitas.admin');
Route::post('adm/komunitas/create',['middleware'=>'check-permission:admin','uses'=>'KomunitasController@create'])->name('tambah_komunitas');
Route::get('/adm/komunitas/{id}/edit', ['middleware'=>'check-permission:admin','uses'=>'KomunitasController@edit'])->name('edit_komunitas');
Route::post('/adm/komunitas/{id}/update', ['middleware'=>'check-permission:admin','uses'=>'KomunitasController@update'])->name('update_komunitas');
Route::get('/adm/komunitas/{id}/hapus',['middleware'=>'check-permission:admin','uses'=>'KomunitasController@hapus'])->name('hapus_komunitas');
Route::get('/adm/komunitas/pendaftar',['middleware'=>'check-permission:admin','uses'=>'KomunitasController@view'])->name('view_anggota');


//komunitas anggota cbt
Route::get('/anggotacbt/komunitas',['middleware'=>'check-permission:member','uses'=>'KomunitasCBTController@index'])->name('data_komunitas.anggota');
Route::get('/anggotacbt/komunitas/pendaftar','PendaftarController@index')->name('view_anggota');
Route::post('/anggotacbt/komunitas/pendaftar/create','PendaftarController@daftar')->name('gabung_daftar');

Route::get('/design',function(){
    $pemesanan = \App\Pemesanan::first();
   return view('desgin',compact('pemesanan'));
});
