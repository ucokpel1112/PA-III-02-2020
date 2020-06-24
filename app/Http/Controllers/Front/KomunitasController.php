<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KomunitasController extends Controller
{
    public function index(){
        $c_komunitas = \App\Komunitas::all()->count();
        $member = \App\User::where([['status',1],['register_status',1]])->get();
        $c_member = $member->count();
        $c_layanan = 0;

//      Count Layanan
        foreach ($member as $row){
            $c_layanan += \App\Member::where('user_id',$row->id)->first()->getLayanan->count();
        }
        $kabupaten = \App\Kabupaten::all();
        return view('front.komunitas.komunitas',compact('kabupaten','c_komunitas','c_layanan','c_member'));
    }

    public function show($id_kabupaten){
        $komunitas = \App\Komunitas::where('kabupaten_id',$id_kabupaten)->get();

        return view('front.komunitas.show',compact('komunitas'));
    }
}
