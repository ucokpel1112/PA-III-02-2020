<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanans';

    protected $primaryKey = 'id_paket';

    protected $fillable=['user_id','paket_id','status','pesan','tanggal_rencana_wisata','jumlah_peserta'];

    public function getPaket(){
        return $this->belongsTo(paketWisata::class,'paket_id','id_pemesanan');
    }

    public function getUser(){
        return $this->belongsTo(paketWisata::class,'paket_id','id_pemesanan');
    }

    public function getTransaksi(){
        return $this->hasMany(Transaksi::class,'pemesanan_id','id_pemesanan');
    }
}
