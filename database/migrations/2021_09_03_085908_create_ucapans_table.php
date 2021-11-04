<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUcapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucapans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_mempelai');
            $table->foreign('id_mempelai')->references('id')->on('mempelais')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama', 160);
            $table->mediumtext('isi_ucapan');
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
        Schema::dropIfExists('ucapans');
    }
}
