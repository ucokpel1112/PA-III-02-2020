<?php

namespace App\Http\Controllers;

use App\Kabupaten;
use Illuminate\Http\Request;

class KomunitasCBTController extends Controller
{
    public function index()
    {
        $data_komunitas = \App\Komunitas::all();
        $kabupaten = Kabupaten::all();
        return view('anggotacbt.komunitas.komunitas',compact('data_komunitas','kabupaten'));
    }


}
