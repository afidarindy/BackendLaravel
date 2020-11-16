<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AkunUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akunUsaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_usaha');
            $table->string('deskripsi_usaha');
            $table->string('alamat_kota');
            $table->string('alamat_provinsi');
            $table->string('alamat_lengkap');
            $table->string('email');
            $table->string('link_gmaps');
            $table->string('foto_usaha');
            $table->string('password');
            $table->string('id_kategori_usaha')->nullable();
            
            $table->softDeletes();
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
        Schema::dropIfExists('akunUsaha');
    }
}
