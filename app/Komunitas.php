<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    protected $table = 'komunitas';

    protected $primaryKey = 'id';

    protected $fillable = ['nama_komunitas','id_kabupaten'];

    public function getKabupaten(){
        return $this->belongsTo(kabupaten::class,'id_kabupaten','id_kabupaten');
    }

    public function getKomunitasMember(){
        return $this->belongsToMany(Member::class,'KomunitasMembers','komunitas_id','member_id','id');
    }
}
