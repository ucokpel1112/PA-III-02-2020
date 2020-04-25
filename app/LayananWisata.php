<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LayananWisata extends Model
{
    protected $table = 'layanan_wisatas';

    public function getJenisLayanan(){
        return $this->belongsTo(JenisLayanan::class, 'jenislayanan_id','id_jenis_layanan');
    }
    public function getKabupaten(){
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id','id_kabupaten');
    }
    public function getPaketLayanan(){
        return $this->belongsToMany(LayananWisata::class,'paket_layanans','layanan_wisata_id','paket_wisata_id','id','id_paket');
    }
}
