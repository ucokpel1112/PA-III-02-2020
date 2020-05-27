<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomunitasMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komunitas_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('komunitas_id');
            $table->unsignedBigInteger('member_id');
            $table->timestamps();

            $table->foreign('komunitas_id')->references('id')->on('komunitas');
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
        Schema::dropIfExists('komunitas_members');
    }
}
