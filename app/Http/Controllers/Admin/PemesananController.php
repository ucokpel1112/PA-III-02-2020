<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\paketWisata;
use App\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::paginate(10);
        $paket = paketWisata::all();

        return view('admin.pemesanan.pemesanan', compact('paket', 'pemesanan'));
    }

    public function indexFilter(Request $request)
    {
        $id_paket = $request->paket;
        $status = $request->status;
        if (($id_paket == null)||($id_paket == 'semua')){
            if($status == null||$status == 'semua'){
                $pemesanan = Pemesanan::paginate(10);
            }else{
                $pemesanan = Pemesanan::where('status',$status)->paginate(10);
            }
        }else{
            if(($status==null)||($status == 'semua')){
                $pemesanan = Pemesanan::where('paket_id',$id_paket)->paginate(10);
            }else{
                $pemesanan = Pemesanan::where([['paket_id',$id_paket],['status',$status]])->paginate(10);
            }
        }
//            echo $id_paket . " " . $status;
        $paket = paketWisata::all();


        return view('admin.pemesanan.pemesanan',compact('pemesanan','paket','id_paket','status'));
    }
}
