<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komunitas;
use App\Kabupaten;
class PendaftarController extends Controller
{
    public function index()
    {
        $data_pendaftar = \App\Pendaftar::all();
        $komunitas = Komunitas::all();
        $kabupaten = Kabupaten::all();
        return view('anggotacbt.komunitas.anggota_komunitas',compact('data_pendaftar','komunitas', 'kabupaten'));
    }
    public function daftar(Request $request)
    {
        \App\Pendaftar::create($request->all());
        return redirect('/anggotacbt/komunitas/pendaftar')->with('sukses', 'Data berhasil didaftar!');
    }
}
