<?php
namespace App\Http\Controllers\AnggotaCBT;

use App\Http\Controllers\Controller;
use App\KalenderEvent;
use App\Komunitas;
use App\LayananWisata;
use App\paketWisata;
use App\Pendaftar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\JenisLayanan;
use App\Kabupaten;
use App\Pemesanan;
use App\Transaksi;
use App\Sesi;
use App\PaketLayanan;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;


class AnggotaCBTController extends Controller
{
    public function count(){
        //Chart
        $transaksi = DB::table('transaksis')
            ->select(DB::raw('count(transaksis.id_transaksi) as jumlah_transaksi'))
            ->leftJoin('pemesanans', 'transaksis.pemesanan_id', '=', 'pemesanans.id_pemesanan')
            ->leftJoin('sesis', 'pemesanans.sesi_id', '=', 'sesis.id_sesi')
            ->leftJoin('paket_wisatas', 'sesis.paket_id', '=', 'paket_wisatas.id_paket')
            ->leftJoin('paket_layanans', 'paket_wisatas.id_paket', '=', 'paket_layanans.paket_wisata_id')
            ->leftJoin('layanan_wisatas', 'paket_layanans.layanan_wisata_id', '=', 'layanan_wisatas.id')
            ->leftJoin('jenis_layanans', 'layanan_wisatas.jenisLayanan_id', '=', 'jenis_layanans.id')
            ->groupBy('jenis_layanans.id')
            ->get();
        $paket = DB::table('jenis_layanans')
            ->select('nama_jenis_layanan')
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
            $pack[$x] = $value->nama_jenis_layanan;
            $x++;
        }
        // var_dump($transaksi);
        // // var_dump($paket);
        // var_dump($tran);
        // var_dump($pack);
        // $tran = [1,2,3];
        $usersChart = (new LarapexChart)->setType('line')
            ->setTitle('Total Pembelian Layanan')
            ->setSubtitle('Total Pembelian Layanan')
            ->setXAxis($pack)
            ->setDataset([
                [
                    'name'  =>  'Total Pembelian Layanan',
                    'data'  =>  $tran
                ]
            ]);
        //akhir chart

        $count = LayananWisata::count();
        $count_k = Komunitas::count();
        $count_m = User::where([['status',1],['register_status',1]])->count();
        $user = User::find(Auth::id());

        return view('anggotacbt.dashboard',compact('usersChart','transaksi','tabel_chart','user','data','count','count_m','count_k'));
    }
}
