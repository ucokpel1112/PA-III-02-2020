<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\paketWisata;
use App\Pemesanan;
use App\Rekening;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::where('user_id',Auth::id())->orderBy('created_at', 'DESC')->paginate(10);
        return view('front.Pemesanan.pemesanan',compact('pemesanan'));
    }

    public function cancel($id_pemesanan){
        $pemesanan = Pemesanan::find($id_pemesanan);
        if($pemesanan->count()!=0){
            $pemesanan->status = 0;
            $pemesanan->save();
        }
        return redirect(route('pemesanan'));
    }

    public function create($id_Paket){

    }

    public function store(Request $request,$id_paket){
        $pemesanan = Pemesanan::where([['paket_id',$id_paket],['user_id',Auth::id()]])->first();
        $count = Pemesanan::where([['paket_id',$id_paket],['user_id',Auth::id()]])->count();
        if($count!=0 || ($pemesanan->status!=0)){

        }else{
            $pemesanan = Pemesanan::create([
                'user_id'=>Auth::id(),
                'paket_id'=>$id_paket,
                'status'=>1,
                'pesan'=>$request->pesan,
                'jumlah_peserta'=>$request->jumlah_peserta
            ]);
            $paket = paketWisata::find($id_paket);
            $countK = $paket->kuota_pesanan;
            if(($countK-1)==0){
                $paket->kuota_pesanan =-1;
                $paket->status = 0;
                $paket->save();
            }elseif ($countK==0){

            }else{
                $paket->kuota_pesanan =-1;
                $paket->save();
            }
        }
        return redirect(route('pemesanan.detail',$pemesanan->id_pemesanan));
    }

    public function show($id_pemesanan){
        $pemesanan = Pemesanan::find($id_pemesanan);
        $status= $pemesanan->defineStatus($pemesanan->status);
        $rekening = Rekening::all();

        if($pemesanan->user_id==Auth::id()){
            return view('front.Pemesanan.detail_pemesanan',compact('rekening','pemesanan','status'));
        }else{
            return redirect(route('pemesanan'));
        }
    }

    public function kirimTransaksi(Request $request, $id_pemesanan){
//        return $id_pemesanan;
        $id = $id_pemesanan;
        if($request->hasFile('bukti')){
            $file = $request->file('bukti');
            $filename = time() .'_'.Auth::id().'_'.$id_pemesanan. '.' . $file->getClientOriginalExtension();

            $file->move('img/pembayaran', $filename);

            $pemesanan = Pemesanan::find($id_pemesanan);
            $pemesanan->status = 2;
            $pemesanan->save();

            $transaksi = Transaksi::create([
                'pemesanan_id' => $id,
                'rekening_id' =>$request->rekening,
                'jumlah' =>$pemesanan->getPaket->harga_paket,
                'gambar' =>$filename
            ]);
        }
        return redirect(route('pemesanan.detail',$id_pemesanan));
    }


}
