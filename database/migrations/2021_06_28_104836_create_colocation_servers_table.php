<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColocationServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colocation_servers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('opd');
            $table->string('bidang');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('email');
            $table->timestamp('approval_date')->nullable();
            $table->unsignedBigInteger('aproval_id')->nullable();
            $table->date('valid_util')->nullable();
            $table->string('status_st')->nullable();
            $table->unsignedBigInteger('penanggung_jawab_id')->nullable();
            $table->string('no')->nullable();
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
        Schema::dropIfExists('colocation_servers');
    }
}
