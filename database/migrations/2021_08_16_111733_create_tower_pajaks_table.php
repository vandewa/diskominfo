<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTowerPajaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tower_pajaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tower_locations_id');
            $table->integer('tahun');
            $table->boolean('bayar_st')->default(false);
            $table->float('jumlah')->nullable();
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
        Schema::dropIfExists('tower_pajaks');
    }
}
