<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    protected $table = 'komunitas';

    protected $primaryKey = 'id';

    protected $fillable = ['nama_komunitas','deskripsi','kabupaten_id','link'];

    public function getKabupaten(){
        return $this->belongsTo( Kabupaten::class, 'kabupaten_id','id_kabupaten');
    }
}
