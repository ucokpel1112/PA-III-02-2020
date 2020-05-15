<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\paketWisata;
use App\Pemesanan;
use App\Rekening;
use App\Transaksi;
use App\Sesi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->paginate(10);
        return view('front.Pemesanan.pemesanan', compact('pemesanan'));
    }

    public function cancel($id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);
        if ($pemesanan->count() != 0) {
            $pemesanan->status = 0;
            $pemesanan->save();
        }
        return redirect(route('pemesanan'));
    }

    public function create($id_Paket)
    {

    }

    protected function refreshPaket($id_paket){
        $paket = paketWisata::find($id_paket);
        foreach ($paket->getSesi as $row){
            if($row->status==1){
                return ;
            }
        }
        $paket->status = 0;
        $paket->save();
    }

    public function store(Request $request, $id_paket)
    {
        $pemesanan = Pemesanan::where([['sesi_id', $request->sesi], ['user_id', Auth::id()]])->get();
        $count = Pemesanan::where([['sesi_id', $request->sesi], ['user_id', Auth::id()]])->count();
        // return $count;
        if ($count != 0) {
            foreach ($pemesanan as $row) {
                echo $row;
                if (($row->status == 1) || ($row->status == 2)) {
//                    echo 's';
                    return redirect(route('pemesanan.detail', $row->id_pemesanan));
                }
            }

        }
        $sesi = Sesi::find($request->sesi);
        $countK = $sesi->kuota_peserta;
        if (($countK - $request->jumlah_peserta) >= 0) {
            $pemesanan = Pemesanan::create([
                'user_id' => Auth::id(),
                'sesi_id' => $request->sesi,
                'status' => 1,
                'pesan' => $request->pesan,
                'jumlah_peserta' => $request->jumlah_peserta
            ]);
            if (($countK - $request->jumlah_peserta) == 0) {
                $sesi->kuota_peserta -= $request->jumlah_peserta;
                $sesi->status = 0;
                $sesi->save();
                $s=$this->refreshPaket($id_paket);
                echo $s;
            } else if(($countK - $request->jumlah_peserta)>0){
                $sesi->kuota_pesanan -= $request->jumlah_peserta;
                $sesi->save();
            }
            return redirect(route('pemesanan.detail', $pemesanan->id_pemesanan));
        }

        return redirect(route('pemesanan'));
    }



    public function show($id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);
        $status = $pemesanan->defineStatus($pemesanan->status);
        $rekening = Rekening::all();

        if ($pemesanan->user_id == Auth::id()) {
            return view('front.Pemesanan.detail_pemesanan', compact('rekening', 'pemesanan', 'status'));
        } else {
            return redirect(route('pemesanan'));
        }
    }

    public function kirimTransaksi(Request $request, $id_pemesanan)
    {
//        return $id_pemesanan;
        $id = $id_pemesanan;
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $filename = time() . '_' . Auth::id() . '_' . $id_pemesanan . '.' . $file->getClientOriginalExtension();

            $file->move('storage/img/pembayaran', $filename);

            $pemesanan = Pemesanan::find($id_pemesanan);
            $pemesanan->status = 2;
            $pemesanan->save();

            $transaksi = Transaksi::create([
                'pemesanan_id' => $id,
                'rekening_id' => $request->rekening,
                'jumlah' => $request->jumlah,
                'gambar' => $filename
            ]);
        }
        return redirect(route('pemesanan.detail', $id_pemesanan));
    }


}
