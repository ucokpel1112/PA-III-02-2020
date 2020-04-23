<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncludedNotIncluded extends Model
{
    protected $table = 'included_not_includeds';

    public function getPaketWisata(){
        return $this->belongsTo(paketWisata::class,'paket_wisata_id','id_ini');
    }
}
