<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Intervention\Image\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\KalenderEvent;
use Illuminate\Notifications\Notifiable;


class KalendereventController extends Controller
{
    public function index(){

        $kalenders = KalenderEvent::inRandomOrder()->limit(9)->get();

        return view ('admin.kalender.eventkalender',compact('kalenders'));
    }
    public function store(Request $request){
        $kalender = new KalenderEvent();
        $kalender->nama_event = $request->input('nama_event');
        $kalender->nama_tempat = $request->input('nama_tempat');
        $kalender->tanggal_event = $request->input('tanggal_event');
        $kalender->jam_event = $request->input('jam_event');
        $kalender->alamat_event = $request->input('alamat_event');
        $kalender->deskripsi_event = $request->input('deskripsi_event');
        $file = $request->file('gambar_event');
        $gambar = $file->getClientOriginalName();
        $kalender->gambar_event = $gambar;
        if($kalender->save()){
            $file->move(\base_path() ."/public/storage/Image/kalender", $gambar);

            return view ('admin/kalender/eventkalender')->with('admin/kalender/eventkalender',$kalender);
        }


    }
    public function update(Request $request,$id_kalenderevent){
        $kalender = KalenderEvent::find($id_kalenderevent);
        $gambar = $kalender->gambar_event;

        if ($request->hasFile('gambar_event')) {
            !empty($gambar) ? File::delete(public_path('public/storage/Image/kalender/' . $gambar)) : null;
            $file = $request->file('gambar_event');
            $gambar = time() . Str::slug($request->nama_paket_wisata) . '.' . $file->getClientOriginalExtension();

            $file->move('public/storage/Image/kalender/', $gambar);
        }

        $kalender->update([
            'nama_event' => $request->nama_event,
            'nama_tempat' => $request->nama_tempat,
            'tanggal_event' => $request->tanggal_event,
            'jam_event' => $request->jam_event,
            'alamat_event' => $request->alamat_event,
            'deskripsi_event' => $request->deskripsi_event,
            'gambar_event' => $gambar,

        ]);
        return view ('admin/kalender/eventkalender')->with('admin/kalender/eventkalender',$id_kalenderevent);

    }
    public function getAll(){
        $kalenders = KalenderEvent::inRandomOrder()->limit(1)->get();
        return view('admin.kalender.updatekalender',compact('kalenders'));
    }
    public function customer_all(){
        $kalenders = KalenderEvent::inRandomOrder()->limit(3)->get();

        return view ('front.eventkalender',compact('kalenders'));
    }
    public function detail($id_kalenderevent){
        $kalenders = KalenderEvent::where('id_kalenderevent', $id_kalenderevent)->first();
        return view('front.detail-eventkalender',compact('kalenders'));
    }

    public function edit($id_kalenderevent){
        $id = $id_kalenderevent;
        $kalenders = KalenderEvent::find($id);
//        print_r($kalenders);
        return view('admin.kalender.updatekalender',compact('kalenders'));
    }

}
