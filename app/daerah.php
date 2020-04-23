<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daerah extends Model
{
    protected $table="daerahs";

    public function getPaketWisata(){
        return $this->hasMany(paketWisata::class,'daerah','id_daerah');
    }
}
