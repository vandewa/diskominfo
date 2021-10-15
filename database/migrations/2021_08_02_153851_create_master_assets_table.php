<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_assets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('satuan_id');
            $table->bigInteger('kategori_id');
            $table->char('name');
            $table->char('barcode');
            $table->integer('tahun_anggaran');
            $table->char('peminjamanst');
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
        Schema::dropIfExists('master_assets');
    }
}
