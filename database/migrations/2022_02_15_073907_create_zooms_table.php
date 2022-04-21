<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zooms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_opd')->nullable();
            $table->string('peminjam')->nullable();
            $table->string('no_hp')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('topik')->nullable();
            $table->time('jam_mulai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->integer('peserta')->nullable();
            $table->string('link_zoom', 555)->nullable();
            $table->string('file_name')->nullable();
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
        Schema::dropIfExists('zooms');
    }
}
