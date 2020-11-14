<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Loker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_loker');
            $table->string('job_description');
            $table->string('persyaratan');
            $table->unsignedBigInteger('gaji');
            $table->date('tanggal_kadaluarsa');
            $table->unsignedBigInteger('id_bidang_usaha')->nullable();

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
        Schema::dropIfExists('loker');
    }
}
