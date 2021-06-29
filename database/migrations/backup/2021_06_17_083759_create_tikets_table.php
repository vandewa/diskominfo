<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('priority_tp');
            $table->string('tiket_tp');
            $table->string('tiket_st');
            $table->string('pelapor');
            $table->unsignedBigInteger('penerima_id');
            $table->unsignedBigInteger('petugas_penyelesaian_id')->nullable();
            $table->longText('deskripsi_masalah')->nullable();
            $table->longText('deskripsi_penyelesaian')->nullable();
            $table->dateTime('tanggal_selesai')->nullable();
            $table->string('lampiran')->nullable();
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
        Schema::dropIfExists('tikets');
    }
}
