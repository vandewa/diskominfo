<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_servers', function (Blueprint $table) {
            $table->id();
            $table->string('opd');
            $table->string('bidang');
            $table->string('alamat');
            $table->string('telp');
            $table->string('email');
            $table->unsignedBigInteger('administratif_id')->nullable();
            $table->unsignedBigInteger('teknis_id')->nullable();
            $table->string('layanan_tp');
            $table->string('keterangan');
            $table->timestamp('approval_date')->nullable();
            $table->date('valid_util')->nullable();
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
        Schema::dropIfExists('layanan_servers');
    }
}
