<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahPropertyPeminjamanDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peminjaman_details', function (Blueprint $table) {
            $table->unsignedBigInteger('penerima_id')->nullable()->after('peminjaman_st');
            $table->dateTime('tanggal_kembali')->nullable()->after('peminjaman_st');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjaman_details', function (Blueprint $table) {
            //
        });
    }
}
