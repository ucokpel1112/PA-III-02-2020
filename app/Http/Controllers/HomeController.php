<?php

namespace App\Http\Controllers;

use App\Kabupaten;
use App\KalenderEvent;
use App\PaketLayanan;
use App\paketWisata;

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
            return $this->home();
        elseif (checkPermission(['member']))
            return redirect(route('home.anggotacbt'));
        elseif (checkPermission(['admin']))
            return redirect(route('home.admin'));
    }

    public function home(){
        $kals = KalenderEvent::latest()->limit(6)->get();
        $kabupaten = Kabupaten::all();
        $count_toba = paketWisata::where([['kabupaten_id',1],['status',1]])->count();
        $count_taput = paketWisata::where([['kabupaten_id',2],['status',1]])->count();
        $count_karo = paketWisata::where([['kabupaten_id',3],['status',1]])->count();
        $count_samosir = paketWisata::where([['kabupaten_id',4],['status',1]])->count();
        $count_simalungun = paketWisata::where([['kabupaten_id',5],['status',1]])->count();
        $count_humbang = paketWisata::where([['kabupaten_id',6],['status',1]])->count();
        $count_dairi = paketWisata::where([['kabupaten_id',7],['status',1]])->count();

        return view('welcome', compact('count_toba','count_taput','kabupaten','kals','count_karo','count_samosir','count_dairi','count_humbang','count_simalungun'));
    }

}
