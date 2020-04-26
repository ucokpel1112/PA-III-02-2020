<?php

namespace App\Http\Controllers;

use App\IncludedNotIncluded;
use App\Kabupaten;
use App\LayananWisata;
use App\PaketLayanan;
use App\paketWisata;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = paketWisata::with(['getIncludedNotIncluded', 'getKabupaten'])->orderBy('created_at', 'DESC')->paginate(10);
//        $pakets= paketWisata::where('id_paket',0)->paginate();
        return view('admin.paket.paket_wisata', compact('pakets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = 'create';
        $kabupaten = Kabupaten::all();
        $options = $this->fill_unit_select_box();
        $c = 1;
        $ci = 1;
        $cu = 1;
        return view('admin.paket.tambah_paket_wisata', compact('status', 'kabupaten', 'options', 'c', 'ci', 'cu'));
    }

    protected function fill_unit_select_box($paket=null)
    {
        $layanan = '';
        if($paket==null){
            foreach (LayananWisata::with('getKabupaten', 'getJenisLayanan')->get() as $layanans) {
                $layanan .= '<option value="' . $layanans['id'] . '">' . $layanans['nama_layanan'] . '</option>';
            }

        }else{
            foreach (LayananWisata::with('getKabupaten', 'getJenisLayanan')->get() as $layanans) {
                $s=0;
                foreach ($paket->getPaketLayanan as $row){
                    if($row->id==$layanans['id']){
                        $s=1;
                    }
                }
                if($s==0){
                    $layanan .= '<option value="' . $layanans['id'] . '">' . $layanans['nama_layanan'] . '</option>';
                }
            }
        }
        return $layanan;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . Str::slug($request->nama_paket_wisata) . '.' . $file->getClientOriginalExtension();

            $file->move('img/paket', $filename);
            $paket = paketWisata::create([
                'nama_paket' => $request->nama_paket_wisata,
                'harga_paket' => $request->harga_paket_wisata,
                'availability' => $request->availability,

                'durasi' => $request->durasi,
                'deskripsi_paket' => $request->deskripsi,
                'rencana_perjalanan' => $request->rencana_perjalanan,
                'tambahan' => $request->tambahan,
                'gambar' => $filename,
                'kabupaten_id' => $request->daerah,
            ]);
            echo $paket->id_paket;
            for ($i = 1; $i <= $request->jlh_included; $i++) {
                $paket->getIncludedNotIncluded()->create([
                    'jenis' => 'included',
                    'keterangan' => $_POST['included_' . $i],
                ]);
            }
            for ($i = 1; $i <= $request->jlh_not_included; $i++) {
                $paket->getIncludedNotIncluded()->create([
                    'jenis' => 'not included',
                    'keterangan' => $_POST['not_included_' . $i],
                ]);
            }
            for ($i = 1; $i <= $request->jlh_layanan; $i++) {
                $paket->getPaketLayanan()->attach($_POST['layanan_' . $i]);
            }
            return redirect(route('admin.paket'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_paket)
    {
        $paket = paketWisata::where('id_paket', $id_paket)->with(['getKabupaten', 'getIncludedNotIncluded', 'getPaketLayanan'])->first();

        return view('admin.paket.detail_paket_wisata', compact('paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function editChoice($id_paket)
    {
        return view('admin.paket.edit_choice_paket', compact('id_paket'));
    }

    public function edit($id_paket)
    {
        $paket = paketWisata::find($id_paket);
        $kabupaten = Kabupaten::all();
        $status = 'edit';
        return view('admin.paket.edit_paket_wisata', compact('paket', 'kabupaten', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_paket)
    {
        $paket = paketWisata::find($id_paket);
        $photo = $paket->gambar;

        if ($request->hasFile('gambar')) {
            !empty($photo) ? File::delete(public_path('img/paket/' . $photo)) : null;
            $file = $request->file('gambar');
            $photo = time() . Str::slug($request->nama_paket_wisata) . '.' . $file->getClientOriginalExtension();

            $file->move('img/paket', $photo);
        }

        $paket->update([
            'nama_paket' => $request->nama_paket_wisata,
            'harga_paket' => $request->harga_paket_wisata,
            'availability' => $request->availability,

            'durasi' => $request->durasi,
            'deskripsi_paket' => $request->deskripsi,
            'rencana_perjalanan' => $request->rencana_perjalanan,
            'tambahan' => $request->tambahan,
            'gambar' => $photo,
            'kabupaten_id' => $request->daerah,
        ]);

        return redirect(route('admin.paket.editChoice', $id_paket));
    }

    public function editIni($id_paket)
    {
        $paket = paketWisata::where('id_paket', $id_paket)->with('getIncludedNotIncluded')->first();
        $ci = 0;
        $cu = 0;
        return view('admin.paket.edit_ini_paket', compact('paket','ci','cu'));
    }

    public function hapusIni($id_ini)
    {
        $ini = IncludedNotIncluded::find($id_ini);
        $id_paket = $ini->paket_wisata_id;
        $ini->delete();

        return redirect(route('admin.paket.ini',$id_paket));
    }
    public function hapusLayanan($id_layanan,$id_paket)
    {

//        echo $id_layanan.' dan '.$id_paket;
        $paket = paketWisata::find($id_paket);
        $paket->getPaketLayanan()->detach($id_layanan);

        return redirect(route('admin.paket.layanan',$id_paket));
    }

    public function updateIni(Request $request, $id_paket)
    {
        $paket = paketWisata::where('id_paket', $id_paket)->with('getIncludedNotIncluded')->first();
        if($request->jlh_included!=0){
            for ($i = 1; $i <= $request->jlh_included; $i++) {
                $paket->getIncludedNotIncluded()->create([
                    'jenis' => 'included',
                    'keterangan' => $_POST['included_' . $i],
                ]);
            }

        }
        if($request->jlh_not_included!=0){
            for ($i = 1; $i <= $request->jlh_not_included; $i++) {
                $paket->getIncludedNotIncluded()->create([
                    'jenis' => 'not included',
                    'keterangan' => $_POST['not_included_' . $i],
                ]);
            }
        }

        return redirect(route('admin.paket.editChoice',$id_paket));
    }

    public function updateLayanan(Request $request, $id_paket)
    {
        $paket = paketWisata::where('id_paket', $id_paket)->with('getPaketLayanan')->first();
        if($request->jlh_layanan!=0){
            for ($i = 1; $i <= $request->jlh_layanan; $i++) {
                $paket->getPaketLayanan()->attach($_POST['layanan_' . $i]);
            }
        }

        return redirect(route('admin.paket.editChoice',$id_paket));
    }

    public function editLayanan($id_paket){
        $paket = paketWisata::where('id_paket', $id_paket)->with('getPaketLayanan')->first();
        $options = $this->fill_unit_select_box($paket);
        $c = 0;
//        var_dump($paket->getPaketLayanan);
        return view('admin.paket.edit_layanan_paket', compact('paket','c','options'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_paket)
    {
        $paket = paketWisata::withCount(['getPaketLayanan'])->where('id_paket', $id_paket)->get();
        $count = null;
        foreach ($paket as $pakets) {
            $count = $pakets->get_paket_layanan_count;
        }
//        print_r($paket);
//        if ($count == 0) {
        $pakets = paketWisata::find($id_paket);
        $pakets->getPaketLayanan()->detach();
        $pakets->delete();
        return redirect(route('admin.paket'));
//        }
//        return redirect(route('admin.paket'));
    }
}
