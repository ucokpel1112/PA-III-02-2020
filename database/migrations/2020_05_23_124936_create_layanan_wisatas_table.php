<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayananWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_wisatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_layanan');
            $table->unsignedBigInteger('jenisLayanan_id');
            $table->unsignedBigInteger('kabupaten_id');
            $table->unsignedBigInteger('member_id');
            $table->text('deskripsi_layanan')->nullable();
            $table->timestamps();

            $table->foreign('jenislayanan_id')->references('id')->on('jenis_layanans');
            $table->foreign('kabupaten_id')->references('id_kabupaten')->on('kabupatens');
            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan_wisatas');
    }
}
