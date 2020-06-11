<?php
namespace App\Http\Controllers\AnggotaCBT;

use App\Http\Controllers\Controller;
use App\KalenderEvent;
use App\Komunitas;
use App\LayananWisata;
use App\paketWisata;
use App\Pendaftar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaCBTController extends Controller
{
    public function count(){
        $count = LayananWisata::count();
        $count_k = Komunitas::count();
        $count_m = Pendaftar::count();
        $user = User::find(Auth::id());
        return view('anggotacbt.dashboard',compact('user','count','count_m','count_k',$count_m,$count,$count_k));

    }
}
