<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    protected $table = 'jenis_layanans';

    public function getLayananWisata(){
        return $this->hasMany(LayananWisata::class, 'jenislayanan_id','id_jenis_layanan');
    }
}

