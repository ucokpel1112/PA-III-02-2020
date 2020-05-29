<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabupaten;


class KomunitasController extends Controller
{
    public function index()
    {
        $data_komunitas = \App\Komunitas::all();
        $kabupaten = Kabupaten::all();
        return view('admin.komunitas.daftar_komunitas',compact('data_komunitas','kabupaten'));
    }

    public function create(Request $request)
    {
        \App\Komunitas::create($request->all());
        return redirect('/adm/komunitas')->with('sukses', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $komunitas = \App\Komunitas::find($id);
        $kabupaten = Kabupaten::all();
        return view('admin/komunitas/update_komunitas', ['komunitas' => $komunitas], compact('komunitas','kabupaten'));
    }

    public function update(Request $request,$id)
    {
        $komunitas = \App\Komunitas::find($id);
        $kabupaten = Kabupaten::all();
        $komunitas->update($request->all());
        return redirect('adm/komunitas')->with('sukses', 'Data berhasil diupdate!');
    }

    public function hapus($id)
    {
        $komunitas = \App\Komunitas::find($id);
        $kabupaten = Kabupaten::all();
        $komunitas->delete($komunitas);
        return redirect('adm/komunitas')->with('sukses', 'Data berhasil dihapus!');
    }

}
