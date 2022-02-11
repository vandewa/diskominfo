<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posting', function (Blueprint $table) {
            $table->integer('id_posting', true);
            $table->string('posisi', 250)->nullable();
            $table->string('judul_posting', 250)->nullable();
            $table->string('slug', 250)->nullable();
            $table->text('isi_posting')->nullable();
            $table->text('kata_kunci')->nullable();
            $table->string('id_kategori', 50)->default('1');
            $table->string('informasi_st', 250)->nullable();
            $table->string('temp', 250)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->string('keterangan', 250)->nullable();
            $table->integer('views')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('posting');
    }
}
