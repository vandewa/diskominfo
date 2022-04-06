<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanAplikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_aplikasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('instansi')->nullable();
            $table->string('nip')->nullable();
            $table->string('nomor')->nullable();
            $table->string('email')->nullable();
            $table->string('latar_belakang')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('status_st')->nullable();
            $table->string('alasan')->nullable();
            $table->string('file_name')->nullable();
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
        Schema::dropIfExists('permohonan_aplikasi');
    }
}
