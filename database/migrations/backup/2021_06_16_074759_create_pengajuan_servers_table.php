<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_servers', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('instansi');
            $table->string('keperluan');
            $table->string('tujuan');
            $table->string('nama_cp');
            $table->string('no_cp');
            $table->unsignedBigInteger('id_kadin')->nullable();
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
        Schema::dropIfExists('pengajuan_servers');
    }
}
