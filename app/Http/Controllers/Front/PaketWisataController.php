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
        $paket = paketWisata::all();
        $jenis = DB::table('paket_wisatas')->select('jenis_paket')->groupBy('jenis_paket')->get();
        $kabupaten = Kabupaten::all();
        return view('front.paket.view_paket', compact('paket', 'jenis', 'kabupaten'));
    }

    public function indexFilter(Request $request)
    {
        $kabupaten = Kabupaten::all();
        $id_kab =0;
        $jenisnya = $request->jenis;
        $kabnya = $request->kabupaten;
        $jenis = DB::table('paket_wisatas')->select('jenis_paket')->groupBy('jenis_paket')->get();

        if ($request->jenis == 'Tipe/Jenis Perjalanan'){
            if($request->kabupaten=='Kabupaten'){
                $paket = paketWisata::all();
            }else{
                foreach ($kabupaten as $kab){
                    if($kab->nama_kabupaten== $request->kabupaten)
                        $id_kab = $kab->id_kabupaten;
                }
                $paket = paketWisata::where('kabupaten_id',$id_kab)->get();
            }
        }else{
            if($request->kabupaten=='Kabupaten'){
                $paket = paketWisata::where('jenis_paket',$request->jenis)->get();
            }else{

                foreach ($kabupaten as $kab){
                    if($kab->nama_kabupaten== $request->kabupaten)
                        $id_kab = $kab->id_kabupaten;
                }
                $paket = paketWisata::whereColumn([['jenis_paket',$request->jenis],['kabupaten_id',$id_kab]])->get();
            }
        }

        return view('front.paket.view_paket',compact('paket','jenis','kabupaten','jenisnya','kabnya'));
    }
}
