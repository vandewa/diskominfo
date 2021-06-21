<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerubahanVpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perubahan_vps', function (Blueprint $table) {
             $table->id();
            $table->string('no');
            $table->string('nama');
            $table->string('nip');
            $table->string('instansi');
            $table->string('tujuan');
            $table->string('prosesor_tp');
            $table->string('so');
            $table->string('hd_tp');
            $table->string('ram_tp');
            $table->string('ip');
            $table->string('aksesnonfisik_tp');
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
        Schema::dropIfExists('perubahan_vps');
    }
}
