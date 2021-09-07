<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTowerLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tower_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tower_owners');
            $table->string('tahun');
            $table->string('lokasi')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('tower_locations');
    }
}
