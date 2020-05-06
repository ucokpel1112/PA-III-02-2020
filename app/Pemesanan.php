<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanans';

    protected $primaryKey = 'id_pemesanan';

    protected $fillable=['user_id','paket_id','status','pesan','jumlah_peserta'];

    public function getPaket(){
        return $this->belongsTo(paketWisata::class,'paket_id','id_paket');
    }

    public function getUser(){
        return $this->belongsTo(paketWisata::class,'paket_id','id_pemesanan');
    }

    public function getTransaksi(){
        return $this->hasMany(Transaksi::class,'pemesanan_id','id_pemesanan');
    }

    public function defineStatus($src){
        $status=null;
        if($src==0){
            $status = 'Pesanan Dibatalkan';
        }else if($src==1){
            $status = 'Menunggu Pembayaran';
        }else if($src==2){
            $status = 'Menunggu Konfirmasi Pembayaran dari Pengelola Paket';
        }else if($src==3){
            $status = 'Pemesanan Telah Berhasil';
        }else if($src==4){
            $status = 'Pemesanan Telah Selesai/Berakhir';
        }
        return $status;
    }

}
