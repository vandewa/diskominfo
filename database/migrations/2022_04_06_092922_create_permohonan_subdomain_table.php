<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanSubdomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_subdomain', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('instansi')->nullable();
            $table->string('bidang')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nomor')->nullable();
            $table->string('email')->nullable();
            $table->string('jenislayanan_tp')->nullable();
            $table->string('nama_subdomain')->nullable();
            $table->string('domain_st')->nullable();
            $table->string('nama_subdomain_cpanel')->nullable();
            $table->string('domain_st_cpanel')->nullable();
            $table->string('hosting')->nullable();
            $table->string('nama_email')->nullable();
            $table->string('file_name')->nullable();
            $table->string('status_st')->nullable();
            $table->string('alasan')->nullable();
           
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
        Schema::dropIfExists('permohonan_subdomain');
    }
}
