<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = ['pemesanan_id ','rekening_id','jumlah','gambar'];

    public function getPemesanan(){
        return $this->hasMany(Pemesanan::class,'pemesanan_id','id_transaksi');
    }

    public function getRekening(){
        return $this->hasMany(Rekening::class,'rekening_id','id_transaksi');
    }
}
