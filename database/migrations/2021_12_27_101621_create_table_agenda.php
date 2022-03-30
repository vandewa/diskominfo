<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nama_id')->nullable();
            $table->date('tanggalBerangkat')->nullable();
            $table->date('tanggalPulang')->nullable();
            $table->char('acara')->nullable();
            $table->char('tempat')->nullable();
            $table->char('keterangan')->nullable();
            $table->time('jamMulai')->nullable();
            $table->bigInteger('oleh')->nullable();
            $table->bigInteger('message_id')->nullable();
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
        Schema::dropIfExists('agendas');
    }
}
