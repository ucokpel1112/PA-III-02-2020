<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftars';

    protected $fillable = ['nama','no_wa','layanan','komunitas_id'];

    public function getKomunitas(){
        return $this->belongsTo(Komunitas::class, 'komunitas_id','id');
    }
    public function getKabupaten(){
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id','id_kabupaten');
    }
}
