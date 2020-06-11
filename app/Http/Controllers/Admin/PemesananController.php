<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\paketWisata;
use App\Pemesanan;
use App\Sesi;
use App\User;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function ubahPesan(Request $request,$id_pemesanan){
        $pemesanan = Pemesanan::find($id_pemesanan);
        $pemesanan->pesan = $request->pesan;
        $pemesanan->save();

        return redirect(route('admin.pemesanan.show',$id_pemesanan));
    }

    public function index()
    {
        $pemesanan = Pemesanan::paginate(10);
        $paket = paketWisata::all();

        return view('admin.pemesanan.pemesanan', compact('paket', 'pemesanan'));
    }

    public function show($id_pemesanan){
        $pemesanan = Pemesanan::find($id_pemesanan);
        $paket = $pemesanan->getSesi->getPaket;
        $user = $pemesanan->getUser;


        // var_dump($user);
       $total = 0;
       foreach ($pemesanan->getTransaksi as $row){
           $total = $total+$row->jumlah;
       }
       // echo $total;

       return view('admin.pemesanan.detail',compact('paket','total','pemesanan','user'));
    }

    public function konfirmasiPembayaran(Request $request, $id_pemesanan){
        $pemesanan = Pemesanan::find($id_pemesanan);
        $pemesanan->status = 3;
        $pemesanan->save();

        return redirect(route('admin.pemesanan.show',$id_pemesanan));
    }

    protected function refreshPaket($id_paket, $status)
    {
        $paket = paketWisata::find($id_paket);
        if ($status == 1) {
            foreach ($paket->getSesi as $row) {
                if ($row->status == 1) {
                    return;
                }
            }
            $paket->status = 0;
        }elseif($status == 0){
            foreach ($paket->getSesi as $row) {
                if ($row->status == 1) {
                    $paket->status = 1;
                }
            }
        }
        $paket->save();
    }

    public function tolakPembayaran(Request $request, $id_pemesanan){
        $pemesanan = Pemesanan::find($id_pemesanan);
        $pemesanan->status = 0;
        $pemesanan->save();

        $sesi = Sesi::find($pemesanan->getSesi->id_sesi);
        $sesi->kuota_peserta += $pemesanan->jumlah_peserta;
        if($sesi->status==0)
            $sesi->status=1;
        $sesi->save();
        $this->refreshPaket($sesi->paket_id,0);

        return redirect(route('admin.pemesanan.show',$id_pemesanan));
    }

    public function uploadUlangPembayaran(Request $request, $id_pemesanan){
        $pemesanan = Pemesanan::find($id_pemesanan);
        $pemesanan->status = 6;
        $pemesanan->save();

        return redirect(route('admin.pemesanan.show',$id_pemesanan));
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
                $pemesanan = Pemesanan::with(['getSesi'=>function($query) use ($id_paket){
                    $query->where('paket_id',$id_paket);
                }])->paginate(10);
            }else{
                $pemesanan = Pemesanan::with(['getSesi'=>function($query) use ($id_paket){
                    $query->where('paket_id',$id_paket);
                }])->where('pemesanans.status',$status)->paginate(10);
            }
        }
//            echo $id_paket . " " . $status;
        $paket = paketWisata::all();


        return view('admin.pemesanan.pemesanan',compact('pemesanan','paket','id_paket','status'));
    }
}
