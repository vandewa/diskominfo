<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahPropertyLainnya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tower_locations', function (Blueprint $table) {
            $table->string('site_name')->nullable()->after('deskripsi');
            $table->string('site_id')->nullable()->after('deskripsi');
            $table->float('index_tinggi')->nullable()->after('deskripsi');
            $table->float('index_location')->nullable()->after('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tower_locations', function (Blueprint $table) {
            //
        });
    }
}
