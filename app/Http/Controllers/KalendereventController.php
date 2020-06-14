<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Intervention\Image\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\KalenderEvent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class KalendereventController extends Controller
{
    public function index()
    {

        $kalender = KalenderEvent::orderBy('created_at', 'DESC')->paginate(6);
        return view('admin.kalender.eventkalender', compact('kalender'));
    }

    public function store(Request $request)
    {
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
        if ($kalender->save()) {
            $file->move(\base_path() . "/public/storage/img/kalender", $gambar);
            return redirect(route('listkalender'));
        }


    }

    public function update(Request $request, $id_kalenderevent)
    {
        $kalender = KalenderEvent::find($id_kalenderevent);
        $gambar = $kalender->gambar_event;

        if ($request->hasFile('gambar_event')) {
            !empty($gambar) ? File::delete(public_path('storage/img/kalender/' . $gambar)) : null;
            $file = $request->file('gambar_event');
            $gambar = time() .'-'.Str::slug($request->nama_event) . '.' . $file->getClientOriginalExtension();

            $file->move('storage/img/kalender', $gambar);
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
        return redirect(route('listkalender'));
    }

    public function getAll()
    {
        $kalenders = KalenderEvent::latest()->limit(1)->get();
        return view('admin.kalender.updatekalender', compact('kalenders'));
    }

    public function customer_all()
    {
        $kalenders = KalenderEvent::query()->paginate(4);
        $kals_up = KalenderEvent::latest()->limit(4)->get();
        return view('front.kalender-event.eventkalender', compact('kals_up','kalenders'));
    }

    public function detail($id_kalenderevent)
    {
        $kalenders = KalenderEvent::where('id_kalenderevent', $id_kalenderevent)->first();
        return view('front.detail-eventkalender', compact('kalenders'));
    }

    public function admin_detail($id_kalenderevent){
        $kalenders = KalenderEvent::where('id_kalenderevent',$id_kalenderevent)->first();
        return view ('admin.kalender.detail-kalender',compact('kalenders'));
    }

    public function edit($id_kalenderevent)
    {
        $id = $id_kalenderevent;
        $kalenders = KalenderEvent::find($id);
//        print_r($kalenders);
        return view('admin.kalender.updatekalender', compact('kalenders'));
    }

    public function destroy($id_kalenderevent)
    {
        $kalenders = KalenderEvent::all();
        $kalender = KalenderEvent::find($id_kalenderevent);
        $kalender->delete();

        return redirect(route('listkalender'));
    }
}

