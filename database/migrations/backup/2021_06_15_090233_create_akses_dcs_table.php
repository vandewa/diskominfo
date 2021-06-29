<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAksesDcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akses_dcs', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('keperluan_tp');
            $table->string('name');
            $table->string('identity_tp');
            $table->string('asal_instansi');
            $table->string('telepon');
            $table->string('email');
            $table->timestamp('approval_date')->nullable();
            $table->unsignedBigInteger('aproval_id')->nullable();
            $table->date('valid_util')->nullable();
            $table->unsignedBigInteger('penanggung_jawab_id')->nullable();
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
        Schema::dropIfExists('akses_dcs');
    }
}
