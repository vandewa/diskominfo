<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AksesDcsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('akses_dcs')->delete();
        
        \DB::table('akses_dcs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'no' => 'ADC-21-06-000001',
                'keperluan_tp' => 'KEPERLUAN_TP_04',
                'name' => 'devan',
                'identity_tp' => 'IDENTITY_TP_01',
                'identity_no' => '34657890',
                'asal_instansi' => 'kominfo',
                'telepon' => '08954444421',
                'email' => 'devandewananta@gmail.com',
                'approval_date' => '2021-06-24 16:26:39',
                'aproval_id' => 1,
                'valid_util' => '2021-06-24',
                'penanggung_jawab_id' => 1,
                'created_at' => '2021-06-24 16:26:10',
                'updated_at' => '2021-06-24 16:26:39',
                'status_st' => 'STATUS_ST_02',
            ),
            1 => 
            array (
                'id' => 2,
                'no' => 'ADC-21-06-000002',
                'keperluan_tp' => 'KEPERLUAN_TP_02',
                'name' => 'seto',
                'identity_tp' => 'IDENTITY_TP_02',
                'identity_no' => '34657890',
                'asal_instansi' => 'rtyu89',
                'telepon' => '0986754',
                'email' => 'devandewananta@gmail.com',
                'approval_date' => NULL,
                'aproval_id' => NULL,
                'valid_util' => NULL,
                'penanggung_jawab_id' => NULL,
                'created_at' => '2021-06-24 21:19:08',
                'updated_at' => '2021-06-24 21:19:08',
                'status_st' => 'STATUS_ST_01',
            ),
        ));
        
        
    }
}