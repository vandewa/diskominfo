<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIjinKunjungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijin_kunjungans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no');
            $table->string('nama');
            $table->string('identity_tp');
            $table->string('asal_instansi');
            $table->string('telepon');
            $table->string('email');
            $table->string('status_st')->nullable();
            $table->timestamp('approval_date')->nullable();
            $table->unsignedBigInteger('aproval_id')->nullable();
            $table->date('valid_util')->nullable();
            $table->unsignedBigInteger('penanggung_jawab_id')->nullable();
            $table->timestamps();
            $table->string('identity_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ijin_kunjungans');
    }
}
