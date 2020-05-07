<?php

namespace App\Http\Controllers\Admin;

use App\paketWisata;
use App\Pemesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::paginate(10);
        $paket = paketWisata::all();

        return view('admin.pemesanan.pemesanan',compact('paket','pemesanan'));
    }

    public function indexFilter(Request $request){
        $id_paket = $request->paket;
        $status = $request->status;
        $paket = paketWisata::all();


        return view('admin.pemesanan.pemesanan',compact('paket','id_paket','$status'));
    }
}
