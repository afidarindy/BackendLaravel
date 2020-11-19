<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PelamarKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar_kerja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->enum('gender', ['L', 'P']);
            $table->string('foto');
            
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
        Schema::dropIfExists('pelamarKerja');
    }
}
