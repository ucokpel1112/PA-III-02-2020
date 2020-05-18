<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    protected $table = 'komunitas';

    protected $primaryKey = 'id';

    public function getKabupaten(){
        return $this->belongsTo(kabupaten::class,'id_kabupaten','id_kabupaten');
    }
}
