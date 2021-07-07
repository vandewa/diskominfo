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
            $table->bigIncrements('id');
            $table->string('no');
            $table->string('instansi');
            $table->string('nama_kadin');
            $table->string('nip');
            $table->string('keperluan');
            $table->string('tujuan');
            $table->string('nama_cp');
            $table->string('no_cp');
            $table->string('email');
            $table->string('status_st')->nullable();
            $table->timestamp('approval_date')->nullable();
            $table->unsignedBigInteger('aproval_id')->nullable();
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
