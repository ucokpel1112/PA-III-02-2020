<?php

namespace App\Http\Controllers;

use App\Kabupaten;
use App\paketWisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = paketWisata::with(['getIncludedNotIncluded','getKabupaten'])->orderBy('created_at','DESC')->paginate(10);
        return view('admin.paket.paket_wisata',compact('pakets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options=$this->fill_unit_select_box();
        return view('admin.tambah_paket_wisata');
    }
    protected function fill_unit_select_box(){
        $layanan = '';
        return $layanan;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_paket)
    {
        $paket = paketWisata::withCount(['getPaketLayanan'])->where('id_paket',$id_paket)->get();
        $count=null;
        foreach ($paket as $pakets){
            $count=$pakets->get_paket_layanan_count;
        }
//        print_r($paket);
        if($count == 0){
            paketWisata::where('id_paket',$id_paket)->delete();

            return redirect(route('admin.paket'));
        }
        return redirect(route('admin.paket'));
    }
}
