<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paketWisata extends Model
{
    protected $table = 'paket_wisatas';

    public function getIncludedNotIncluded(){
        return $this->hasMany(IncludedNotIncluded::class,'paket_wisata_id','id_paket');
    }
    public function getKabupaten(){
        return $this->belongsTo(kabupaten::class,'kabupaten_id','id_kabupaten');
    }
    public function getPaketLayanan(){
        return $this->hasMany(PaketLayanan::class,'paket_wisata_id','id_paket');
    }
}
