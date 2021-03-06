<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarInformasiPublikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_informasi_publik', function (Blueprint $table) {
            $table->id();
            $table->integer('root')->nullable();
            $table->string('nomor')->nullable();
            $table->string('jenis_informasi')->nullable();
            $table->longText('ringkasan_informasi')->nullable();
            $table->string('pejabat_yg_menguasai')->nullable();
            $table->string('penanggungjawab_informasi')->nullable();
            $table->string('waktu_pembuatan')->nullable();
            $table->string('bentuk_informasi')->nullable();
            $table->string('retensi')->nullable();
            $table->longText('link')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('daftar_informasi_publik');
    }
}
