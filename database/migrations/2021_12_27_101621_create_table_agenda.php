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
            $table->bigInteger('nama_id');
            $table->date('tanggalBerangkat');
            $table->date('tanggalPulang');
            $table->char('acara');
            $table->char('tempat');
            $table->char('keterangan');
            $table->char('tanggal');
            $table->char('oleh');
            $table->bigInteger('message_id');
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
