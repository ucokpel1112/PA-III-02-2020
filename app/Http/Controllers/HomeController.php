<?php

namespace App\Http\Controllers;

use App\KalenderEvent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (checkPermission(['customer'])||checkPermission(['user']))
            return redirect(route('home.customer'));
        elseif (checkPermission(['member']))
            return redirect(route('home.anggotacbt'));
        elseif (checkPermission(['admin']))
            return redirect(route('home.admin'));
    }

    public function home(){
        $kals = KalenderEvent::latest()->limit(6)->get();
        return view('welcome', compact('kals'));
    }
}
