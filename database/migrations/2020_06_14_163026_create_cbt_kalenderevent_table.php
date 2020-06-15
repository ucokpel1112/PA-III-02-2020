<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCbtKalendereventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbt_kalenderevent', function (Blueprint $table) {
            $table->bigIncrements('id_kalenderevent');
            $table->string('nama_event',255);
            $table->string('nama_tempat',255);
            $table->date('tanggal_event');
            $table->time('jam_event');
            $table->string('alamat_event',255);
            $table->text('deskripsi_event');
            $table->mediumText('gambar_event');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cbt_kalenderevent');
    }
}
