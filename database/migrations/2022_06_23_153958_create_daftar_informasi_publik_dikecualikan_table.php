<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarInformasiPublikDikecualikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_informasi_publik_dikecualikan', function (Blueprint $table) {
            $table->id();
            $table->string('waktu_pembuatan')->nullable();
            $table->string('nomor')->nullable();
            $table->longText('informasi_dikecualikan')->nullable();
            $table->longText('dasar_hukum')->nullable();
            $table->longText('dibuka')->nullable();
            $table->longText('ditutup')->nullable();
            $table->text('jangka_waktu')->nullable();
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
        Schema::dropIfExists('daftar_informasi_publik_dikecualikan');
    }
}
