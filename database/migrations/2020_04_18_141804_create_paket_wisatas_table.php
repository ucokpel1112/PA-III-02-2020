<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_wisatas', function (Blueprint $table) {
            $table->bigIncrements('id_paket');
            $table->string('nama_paket');
            $table->bigInteger('harga_paket');
            $table->integer('availability');
            $table->string('durasi');
            $table->text('deskripsi_paket');
            $table->text('rencana_perjalanan')->nullable();
            $table->text('tambahan')->nullable();
            $table->text('gambar');
            $table->unsignedBigInteger('daerah');
            $table->foreign('daerah')->references('id_daerah')->on('daerahs');
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
        Schema::dropIfExists('paket_wisatas');
    }
}
