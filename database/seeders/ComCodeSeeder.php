<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComCode;
use DB;

class ComCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('com_codes')->truncate();
        $data = [
            ['code_cd' => 'KEPERLUAN_TP_01', 'code_nm' => 'Server Hardware Maintanace', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_02', 'code_nm' => 'Server Software Maintanace', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_03', 'code_nm' => 'Hanya Berkunjung', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_04', 'code_nm' => 'Server IP (Client)', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_05', 'code_nm' => 'Server Hostname (Client)', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_06', 'code_nm' => 'Penyelesaian Masalah', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'IDENTITY_TP_01', 'code_nm' => 'KTP', 'code_group' => 'IDENTITY_TP', 'code_value' => ''],
            ['code_cd' => 'IDENTITY_TP_02', 'code_nm' => 'SIM', 'code_group' => 'IDENTITY_TP', 'code_value' => ''],
            ['code_cd' => 'IDENTITY_TP_03', 'code_nm' => 'Passport', 'code_group' => 'IDENTITY_TP', 'code_value' => ''],
            ['code_cd' => 'PROSESOR_TP_01', 'code_nm' => 'Dual Core Processor', 'code_group' => 'PROSESOR_TP', 'code_value' => ''],
            ['code_cd' => 'PROSESOR_TP_02', 'code_nm' => 'Quad Core Processor', 'code_group' => 'PROSESOR_TP', 'code_value' => ''],
            ['code_cd' => 'HARDISK_TP_01', 'code_nm' => '20 GB', 'code_group' => 'HARDISK_TP', 'code_value' => ''],
            ['code_cd' => 'HARDISK_TP_02', 'code_nm' => '40 GB', 'code_group' => 'HARDISK_TP', 'code_value' => ''],
            ['code_cd' => 'RAM_TP_01', 'code_nm' => '1 GB', 'code_group' => 'RAM_TP', 'code_value' => ''],
            ['code_cd' => 'RAM_TP_02', 'code_nm' => '2 GB', 'code_group' => 'RAM_TP', 'code_value' => ''],
            ['code_cd' => 'AKSESNONFISIK_TP_01', 'code_nm' => 'SSH', 'code_group' => 'AKSESNONFISIK_TP', 'code_value' => ''],
            ['code_cd' => 'AKSESNONFISIK_TP_02', 'code_nm' => 'Remote Desktop', 'code_group' => 'AKSESNONFISIK_TP', 'code_value' => ''],
            ['code_cd' => 'JENISLAYANAN_TP_01', 'code_nm' => 'Layanan Hosting', 'code_group' => 'JENISLAYANAN_TP ', 'code_value' => ''],
            ['code_cd' => 'JENISLAYANAN_TP_02', 'code_nm' => 'Layanan Sub Domain', 'code_group' => 'JENISLAYANAN_TP ', 'code_value' => ''],
            ['code_cd' => 'JENISLAYANAN_TP_03', 'code_nm' => 'Layanan Cpanel', 'code_group' => 'JENISLAYANAN_TP ', 'code_value' => ''],
            ['code_cd' => 'JENISLAYANAN_TP_04', 'code_nm' => 'Layanan Email', 'code_group' => 'JENISLAYANAN_TP ', 'code_value' => ''],
        ];

        foreach ($data as $datum){
            ComCode::create($datum);
        }
    }
}
