<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paketWisata extends Model
{
    protected $table = 'paket_wisatas';

    public function getIncludedNotIncluded(){
        return $this->hasMany(IncludedNotIncluded::class,'paket_wisata_id','id_paket');
    }
    public function getDaerah(){
        return $this->belongsTo(daerah::class,'daerah','id_daerah');
    }
}
