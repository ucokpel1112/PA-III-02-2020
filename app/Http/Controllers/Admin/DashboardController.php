<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\KalenderEvent;
use App\Member;
use App\paketWisata;
use App\Pendaftar;
use App\Pemesanan;
use App\User;
use App\Transaksi;
use App\Sesi;
use App\PaketLayanan;
use App\JenisLayanan;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count(){
        // Chart
        $transaksi = DB::table('transaksis')
            ->select(DB::raw('count(transaksis.id_transaksi) as jumlah_transaksi'))
            ->leftJoin('pemesanans', 'transaksis.pemesanan_id', '=', 'pemesanans.id_pemesanan')
            ->leftJoin('sesis', 'pemesanans.sesi_id', '=', 'sesis.id_sesi')
            ->leftJoin('paket_wisatas', 'sesis.paket_id', '=', 'paket_wisatas.id_paket')
            ->groupBy('paket_wisatas.id_paket')
            ->get();
        $paket = DB::table('paket_wisatas')
            ->select('nama_paket')
            ->get();

        $tabel_chart = DB::table('transaksis')
            ->select('sesis.paket_id','pemesanans.status','paket_wisatas.nama_paket','layanan_wisatas.nama_layanan','jenis_layanans.nama_jenis_layanan','transaksis.jumlah')
            ->leftJoin('pemesanans', 'transaksis.pemesanan_id', '=', 'pemesanans.id_pemesanan')
            ->leftJoin('sesis', 'pemesanans.sesi_id', '=', 'sesis.id_sesi')
            ->leftJoin('paket_wisatas', 'sesis.paket_id', '=', 'paket_wisatas.id_paket')
            ->leftJoin('paket_layanans', 'paket_wisatas.id_paket', '=', 'paket_layanans.paket_wisata_id')
            ->leftJoin('layanan_wisatas', 'paket_layanans.layanan_wisata_id', '=', 'layanan_wisatas.id')
            ->leftJoin('jenis_layanans', 'layanan_wisatas.jenisLayanan_id', '=', 'jenis_layanans.id')
            // // ->groupBy('paket_wisatas.id_paket')
            ->get();

        $data = Transaksi::all();

        $x = 0;
        $tran = array();
        foreach($transaksi as $value){
            $tran[$x] = $value->jumlah_transaksi;
            $x++;
        }
        $x = 0;
        $pack = array();
        foreach($paket as $value){
            $pack[$x] = $value->nama_paket;
            $x++;
        }
        // var_dump($transaksi);
        // var_dump($paket);
        // var_dump($tran);
        // var_dump($pack);
        // $tran = [1,2,3];
        $usersChart = (new LarapexChart)->setType('line')
            ->setTitle('Total Pembelian Paket')
            ->setSubtitle('Total Pembelian Paket')
            ->setXAxis($pack)
            ->setDataset([
                [
                    'name'  =>  'Total Pembelian Paket',
                    'data'  =>  $tran
                ]
            ]);
        //akhir untuk chart

        //kalender event
        $count = KalenderEvent::count();
        $count_p = paketWisata::count();
        $count_m = Member::count();
        $count_c = User::where('status',0)->count();
        //akhir kalender event

        return view('admin.dashboard',compact('count_m','count_c','data','tabel_chart','transaksi','usersChart','count','count_p'));
    }

}
