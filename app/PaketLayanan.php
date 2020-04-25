<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaketLayanan extends Model
{
    protected $table = 'paket_layanans';

    public function getPaket(){
        $this->belongsTo(paketWisata::class,'paket_wisata_id','id_paket');
    }
    public function getLayanan(){
        $this->belongsTo(LayananWisata::class,'layanan_wisata_id','id_layanan');
    }
}
