<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KalenderEvent extends Model
{
    protected $table ="cbt_kalenderevent";
    protected $primaryKey = "id_kalenderevent";
    protected $fillable = ['nama_event','nama_tempat','tanggal_event','jam_event','alamat_event','deskripsi_event','gambar_event'];
}
