<?php

namespace App\Http\Controllers;

use App\KalenderEvent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count_kalender(){
        $count = KalenderEvent::count();
        return view('admin.dashboard',compact('count',$count));

    }
}
