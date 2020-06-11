<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\jadwalPaket;
use App\paketWisata;
use App\Pemesanan;
use App\Rekening;
use App\Sesi;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class PemesananController extends Controller
{
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

    public function index()
    {
        $pemesanan = Pemesanan::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->paginate(10);
        return view('front.Pemesanan.pemesanan', compact('pemesanan'));
    }

    public function cancel($id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);
        if ($pemesanan->count() != 0) {
            $sesi = Sesi::find($pemesanan->sesi_id);
            $sesi->kuota_peserta += $pemesanan->jumlah_peserta;
            if($sesi->status==0)
                $sesi->status=1;
            $sesi->save();
            $pemesanan->status = 0;
            $pemesanan->save();

            $this->refreshPaket($pemesanan->getSesi->paket_id,0);
        }
        return redirect(route('pemesanan'));
    }

    public function create($id_Paket)
    {

    }

    public function store(Request $request, $id_paket)
    {
        $pemesanan = Pemesanan::where([['sesi_id', $request->sesi], ['user_id', Auth::id()]])->get();
        $count = Pemesanan::where([['sesi_id', $request->sesi], ['user_id', Auth::id()]])->count();
        // return $count;
        if ($count != 0) {
            foreach ($pemesanan as $row) {
                echo $row;
                if (($row->status == 1) || ($row->status == 2) || ($row->status == 4)) {
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
                $this->refreshPaket($id_paket,1);
            } else if (($countK - $request->jumlah_peserta) > 0) {
                $sesi->kuota_peserta -= $request->jumlah_peserta;
                $sesi->save();
            }
            $paket = paketWisata::find($sesi->paket_id);
            Mail::to(Auth::user()->email)->send(new jadwalPaket($paket));
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

    public function getDataPemesanan($id_pemesanan)
    {
        $data = Pemesanan::find($id_pemesanan);
        return $data;
    }

    public function updateStatus($id_pemesanan)
    {
        $data = Pemesanan::find($id_pemesanan);
        $data->status = 5;
        $data->save();
        $sesi = Sesi::find($data->sesi_id);
        $sesi->kuota_peserta += $data->jumlah_peserta;
        if ($sesi->status == 0) {
            $sesi->status = 1;
        }
        $sesi->save();

        $this->refreshPaket($sesi->paket_id,0);
    }

    public function updateTransaksi(Request $request, $id_transaksi)
    {
//        return $id_pemesanan;
        $id = $id_transaksi;
        $transaksi1 = Transaksi::find($id);
        $pemesanan = $transaksi1->getPemesanan;
        if ($request->hasFile('bukti')) {
            if (file_exists("storage/img/pembayaran/" . $transaksi1->gambar)) {
                unlink("storage/img/pembayaran/" . $transaksi1->gambar);
            }
            $file = $request->file('bukti');
            $filename = time() . '_' . Auth::id() . '_' . $pemesanan->id_pemesanan . '.' . $file->getClientOriginalExtension();

            $file->move('storage/img/pembayaran', $filename);

            $pemesanan->status = 2;
            $pemesanan->save();

            $transaksi1->rekening_id = $request->rekening;
            $transaksi1->jumlah = $request->jumlah;
            $transaksi1->gambar = $filename;
            $transaksi1->save();
        }
        return redirect(route('pemesanan.detail', $pemesanan->id_pemesanan));
    }


}
