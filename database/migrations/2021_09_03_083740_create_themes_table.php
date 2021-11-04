<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_theme');
            $table->string('kode_theme');
            // $table->string('colpalette_1');
            // $table->string('colpalette_2');
            // $table->string('colpalette_3');
            // $table->string('colpalette_4');
            // $table->string('background');
            // $table->string('font_1');
            // $table->string('font_2');
            // $table->string('gambar_ornamen1');
            // $table->string('gambar_ornamen2');
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
        Schema::dropIfExists('themes');
    }
}
