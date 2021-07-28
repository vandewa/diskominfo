<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColocationServersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('colocation_servers')->delete();
        
        \DB::table('colocation_servers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'bidang' => 'Informatika',
                'alamat' => 'Jalan Sabuk Alu',
                'telepon' => '0232131',
                'email' => 'devandewananta@gmail.com',
                'approval_date' => NULL,
                'aproval_id' => NULL,
                'valid_util' => NULL,
                'penanggung_jawab_id' => NULL,
                'created_at' => '2021-06-29 10:01:56',
                'updated_at' => '2021-06-29 10:01:56',
                'status_st' => 'STATUS_ST_01',
                'no' => 'CSV-21-06-000001',
            ),
        ));
        
        
    }
}