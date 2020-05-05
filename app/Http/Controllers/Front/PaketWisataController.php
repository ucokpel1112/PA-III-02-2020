<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Kabupaten;
use App\paketWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketWisataController extends Controller
{
    public function index()
    {
        $paket = paketWisata::orderBy('created_at', 'DESC')->paginate(10);;
        $jenis = DB::table('paket_wisatas')->select('jenis_paket')->groupBy('jenis_paket')->get();
        $kabupaten = Kabupaten::all();
        return view('front.paket.view_paket', compact('paket', 'jenis', 'kabupaten'));
    }

    public function indexFilter(Request $request)
    {
        $kabupaten = Kabupaten::all();
        $id_kab = $request->kabupaten;
        $jeniss = $request->jenis;
        $jenis = DB::table('paket_wisatas')->select('jenis_paket')->groupBy('jenis_paket')->get();

        if ($request->jenis == 'Tipe/Jenis Perjalanan') {
            if ($request->kabupaten == 'Kabupaten') {
                $paket = paketWisata::orderBy('created_at', 'DESC')->paginate(10);
            } else {
                $paket = paketWisata::where('kabupaten_id', $id_kab)->orderBy('created_at', 'DESC')->paginate(10);
            }
        } else {
            if ($request->kabupaten == 'Kabupaten') {
                $paket = paketWisata::where('jenis_paket','LIKE','%'.$request->jenis.'%')->orderBy('created_at', 'DESC')->paginate(10);
            } else {
                $paket = paketWisata::where([['kabupaten_id', $id_kab],['jenis_paket','LIKE','%'.$request->jenis.'%']])->orderBy('created_at', 'DESC')->paginate(10);
            }
        }

//        return $paket;
        return view('front.paket.view_paket', compact('paket', 'jenis', 'kabupaten', 'jeniss','id_kab'));
    }

    public function show($id_paket){
        $paket = paketWisata::find($id_paket);

        return view('front.paket.detail_paket',compact('paket'));
    }
}
