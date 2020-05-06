<?php

namespace App\Http\Controllers;

use App\JenisLayanan;
use App\Kabupaten;
use App\LayananWisata;
use Illuminate\Http\Request;

class LayananWisataController extends Controller
{
    public function index()
    {
        $data_layanan_wisata = LayananWisata::all();
        $kabupaten = Kabupaten::all();
        $jenis = JenisLayanan::all();

        return view('anggotacbt.layanan_wisata.index',compact('data_layanan_wisata','kabupaten','jenis'));
    }
    public function create(Request $request)
    {
        LayananWisata::create($request->all());
        return redirect (route('anggotacbt.layanan'))->with('sukses','data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $layanan_wisata = LayananWisata::find($id);
        return view('anggotacbt.layanan_wisata.edit',['layanan_wisata' => $layanan_wisata]);
    }

    public function update(Request $request,$id)
    {
        $layanan_wisata = LayananWisata::find($id);
        $layanan_wisata -> update($request->all());
        return redirect(route('anggotacbt.layanan'))->with('sukses','Data berhasil di update');
    }

    public function delete($id)
    {
        $layanan_wisata = LayananWisata::find($id);
        $layanan_wisata->delete($layanan_wisata);
        return redirect(route('anggotacbt.layanan'))->with('sukses','Data Berhasil dihapus');

    }
}
