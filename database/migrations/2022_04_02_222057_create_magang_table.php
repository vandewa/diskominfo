<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magang', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('asal')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('lama_magang')->nullable();
            $table->string('nomor_surat')->nullable();
            $table->string('nomor')->nullable();
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
        Schema::dropIfExists('magang');
    }
}
