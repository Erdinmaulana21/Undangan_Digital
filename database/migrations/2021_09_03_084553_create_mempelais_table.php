<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMempelaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mempelais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_pria');
            $table->string('nama_panggilan_pria');
            $table->string('nama_ibu_pria');
            $table->string('nama_ayah_pria');
            $table->string('nama_wanita');
            $table->string('nama_panggilan_wanita');
            $table->string('nama_ibu_wanita');
            $table->string('nama_ayah_wanita');
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
        Schema::dropIfExists('mempelais');
    }
}
