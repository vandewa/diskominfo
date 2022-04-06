<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanColocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_colocation', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('instansi')->nullable();
            $table->string('bidang')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nomor')->nullable();
            $table->string('email')->nullable();
            $table->string('merk')->nullable();
            $table->string('type')->nullable();
            $table->string('model')->nullable();
            $table->string('cpu')->nullable();
            $table->string('hardisk')->nullable();
            $table->string('ram')->nullable();
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
        Schema::dropIfExists('permintaan_colocation');
    }
}
