<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\KalenderEvent;
use Illuminate\Notifications\Notifiable;


class HomeController extends Controller
{
    public function getforIndex(){
        $kals = KalenderEvent::latest()->limit(6)->get();
        return view('welcome',compact('kals'));

    }
}
