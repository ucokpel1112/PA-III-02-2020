<?php

namespace App\Http\Controller\Admin;
use App\Http\Controllers\Controller;

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
