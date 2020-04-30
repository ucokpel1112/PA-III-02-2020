<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paketWisata extends Model
{
    protected $table = 'paket_wisatas';
    protected $primaryKey = 'id_paket';
    protected $fillable =['nama_paket','jenis_paket','status','harga_paket','availability','durasi','deskripsi_paket','rencana_perjalanan','tambahan','gambar','kabupaten_id'];

    public function getIncludedNotIncluded(){
        return $this->hasMany(IncludedNotIncluded::class,'paket_wisata_id','id_paket');
    }
    public function getPemesanan(){
        return $this->hasMany(Pemesanan::class,'paket_id','id_paket');
    }
    public function getKabupaten(){
        return $this->belongsTo(kabupaten::class,'kabupaten_id','id_kabupaten');
    }
    public function getPaketLayanan(){
        return $this->belongsToMany(LayananWisata::class,'paket_layanans','paket_wisata_id','layanan_wisata_id','id_paket','id');
    }
    public static function boot() {
        parent::boot();

        static::deleting(function($paket) { // before delete() method call this
            $paket->getIncludedNotIncluded()->delete();
            // do the rest of the cleanup...
        });
    }
}
