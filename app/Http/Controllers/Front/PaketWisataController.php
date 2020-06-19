<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Kabupaten;
use App\paketWisata;
use App\Sesi;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketWisataController extends Controller
{
    public function index()
    {
        $paket = paketWisata::where('status', 1)->orderBy('created_at', 'DESC')->paginate(10);
        $pakets = paketWisata::where('status', 1)->orderBy('created_at', 'DESC')->get();
        $jenis = DB::table('paket_wisatas')->select('jenis_paket')->groupBy('jenis_paket')->get();
        $kabupaten = Kabupaten::all();
        $paket_lainnya = $pakets->take(3);
        return view('front.paket.view_paket', compact('paket', 'jenis', 'kabupaten','paket_lainnya'));
    }

    public function indexFilterKabupaten($id_kabupaten)
    {
        $kabupaten = Kabupaten::all();
        $id_kab = $id_kabupaten;
        $jeniss = 'Tipe/Jenis Perjalanan';
        $jenis = DB::table('paket_wisatas')->select('jenis_paket')->groupBy('jenis_paket')->get();

        $paket = paketWisata::where([['kabupaten_id', $id_kab], ['status', 1]])->orderBy('created_at', 'DESC')->paginate(10);
        $pakets = paketWisata::where('status', 1)->orderBy('created_at', 'DESC')->get();

        $paket_lainnya = $pakets->take(3);
        return view('front.paket.view_paket', compact('paket', 'jenis', 'kabupaten', 'jeniss', 'paket_lainnya','id_kab'));
    }

    public function indexFilter(Request $request)
    {
        $kabupaten = Kabupaten::all();
        $id_kab = $request->kabupaten;
        $jeniss = $request->jenis;
        $jenis = DB::table('paket_wisatas')->select('jenis_paket')->groupBy('jenis_paket')->get();
        $pakets = paketWisata::where('status', 1)->orderBy('created_at', 'DESC')->get();
        $paket_lainnya = $pakets->take(3);

        if ($request->jenis == 'Tipe/Jenis Perjalanan') {
            if ($request->kabupaten == 'Kabupaten') {
                $paket = paketWisata::where('status', 1)->orderBy('created_at', 'DESC')->paginate(10);
            } else {
                $paket = paketWisata::where([['kabupaten_id', $id_kab], ['status', 1]])->orderBy('created_at', 'DESC')->paginate(10);
            }
        } else {
            if ($request->kabupaten == 'Kabupaten') {
                $paket = paketWisata::where([['jenis_paket', 'LIKE', '%' . $request->jenis . '%'], ['status', 1]])->orderBy('created_at', 'DESC')->paginate(10);
            } else {
                $paket = paketWisata::where([['status', 1], ['kabupaten_id', $id_kab], ['jenis_paket', 'LIKE', '%' . $request->jenis . '%']])->orderBy('created_at', 'DESC')->paginate(10);
            }
        }

//        return $paket;
        return view('front.paket.view_paket', compact('paket', 'jenis', 'kabupaten', 'jeniss', 'id_kab','paket_lainnya'));
    }

    public function show($id_paket)
    {
        $paket = paketWisata::find($id_paket);
        $sesi = Sesi::where([['paket_id', $id_paket], ['status', 1]])->get();
        $hotel = [];
        $comments = Comment::where('paket_id',$id_paket)->get();

        foreach ($paket->getPaketLayanan as $row) {
            if ($row->getJenisLayanan->nama_jenis_layanan == 'Akomodasi')
                array_push($hotel, $row);
        }
        $counts = 0;
        $paket_lain = paketWisata::where([['status', 1],['kabupaten_id',$paket->kabupaten_id],['id_paket','!=',$id_paket]])->orderBy('created_at', 'DESC')->paginate(3);
        return view('front.paket.detail_paket', compact('counts','paket_lain','comments','paket', 'hotel', 'sesi'));
    }
}
