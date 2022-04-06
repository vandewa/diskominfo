<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJaringanInternetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaringan_internet', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('instansi')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('nip')->nullable();
            $table->string('nomor')->nullable();
            $table->string('email')->nullable();
            $table->string('jaringan_st')->nullable();
            $table->string('layanan_st')->nullable();
            $table->string('status_st')->nullable();
            $table->string('alasan')->nullable();
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
        Schema::dropIfExists('jaringan_internet');
    }
}
