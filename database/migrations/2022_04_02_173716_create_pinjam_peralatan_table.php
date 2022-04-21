<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamPeralatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam_peralatan', function (Blueprint $table) {
            $table->id();
            $table->string('no')->nullable();
            $table->string('nama')->nullable();
            $table->string('instansi')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->string('alat')->nullable();
            $table->string('lama_pinjam')->nullable();
            $table->string('nomor')->nullable();
            $table->string('status_st')->nullable();
            $table->string('alasan')->nullable();
            $table->string('file_name')->nullable();
            $table->string('bukti')->nullable();
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
        Schema::dropIfExists('pinjam_peralatan');
    }
}
