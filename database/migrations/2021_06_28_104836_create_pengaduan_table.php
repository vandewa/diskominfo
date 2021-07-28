<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 250)->nullable();
            $table->string('alamat', 250)->nullable();
            $table->string('pekerjaan', 250)->nullable();
            $table->string('telp', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->string('isi_aduan', 1000)->nullable();
            $table->integer('parent')->nullable();
            $table->integer('publish')->nullable();
            $table->integer('status')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('pengaduan');
    }
}
