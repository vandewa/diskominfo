<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('parent', 50)->nullable();
            $table->string('nama', 50)->nullable();
            $table->text('url')->nullable();
            $table->string('lampiran', 10)->nullable()->default('n');
            $table->string('isi_posting', 5000)->nullable();
            $table->string('sampul', 5000)->nullable();
            $table->string('file_name')->nullable();
            $table->string('informasi_st')->nullable();
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
        Schema::dropIfExists('menu');
    }
}
