<?php
namespace App\Http\Controllers\AnggotaCBT;

use App\Http\Controllers\Controller;
use App\KalenderEvent;
use App\Komunitas;
use App\LayananWisata;
use App\paketWisata;
use Illuminate\Http\Request;

class AnggotaCBTController extends Controller
{
    public function count(){
        $count = LayananWisata::count();
        $count_k = Komunitas::count();
        return view('anggotacbt.dashboard',compact('count','count_k',$count,$count_k));

    }
}
