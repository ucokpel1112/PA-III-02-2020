<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers;
use App\paketWisata;
use App\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index(){

    }

    public function create($id_Paket){

    }

    public function store(Request $request,$id_paket){
        $pemesanan = Pemesanan::create([
           'user_id'=>Auth::id(),
           'paket_id'=>$id_paket,
           'status'=>1,
            'pesan'=>$request->pesan,
            'jumlah_peserta'=>$request->jumlah_peserta
        ]);
        $paket = paketWisata::find($id_paket);
        $count = $paket->kuota_pesanan;
        if(($count-1)==0){
            $paket->kuotaPesanan =-1;
            $paket->status = 0;
            $paket->save();
        }else{
            $paket->kuotaPesanan =-1;
            $paket->save();
        }
        return redirect(route('paket',compact('paket','pemesanan')));
    }
}
