<?php

namespace App\Http\Controllers;

use App\KalenderEvent;
use App\paketWisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count(){
        $count = KalenderEvent::count();
        $count_p = paketWisata::count();
        return view('admin.dashboard',compact('count',$count,'count_p',$count_p));

    }

}
