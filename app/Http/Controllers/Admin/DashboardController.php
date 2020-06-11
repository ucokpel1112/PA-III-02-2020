<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\KalenderEvent;
use App\paketWisata;
use App\Pendaftar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count(){
        $count = KalenderEvent::count();
        $count_p = paketWisata::count();
        $count_m = Pendaftar::count();
        return view('admin.dashboard',compact('count',$count,'count_p',$count_p,'count_m',$count_m));
    }

}
