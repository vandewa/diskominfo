<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KomentarTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('komentar')->delete();
        
        \DB::table('komentar')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-04-28 16:08:39',
                'updated_at' => '2021-05-18 18:34:50',
                'nama' => 'Dewananta',
                'nomor' => '0816565542323',
                'email' => 'devandewananta@gmail.com',
                'isi' => 'siapp',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-05-12 11:49:15',
                'updated_at' => '2021-05-18 18:35:00',
                'nama' => 'Devandewa',
                'nomor' => '0816565542323',
                'email' => 'admin@admin.com',
                'isi' => 'oke',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-05-12 11:55:14',
                'updated_at' => '2021-05-12 11:55:14',
                'nama' => 'aku',
                'nomor' => '089604484626',
                'email' => 'seto@gmail.com',
                'isi' => 'oooo',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-05-12 12:26:35',
                'updated_at' => '2021-05-18 11:54:44',
                'nama' => 'aku',
                'nomor' => 'yuoi',
                'email' => 'admin@admin.com',
                'isi' => 'uigg',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-05-20 22:11:10',
                'updated_at' => '2021-05-20 22:11:10',
                'nama' => 'Dewananta',
                'nomor' => '089604484626',
                'email' => 'devandewa@ymail.com',
                'isi' => 'dede',
                'status' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2021-05-28 08:00:36',
                'updated_at' => '2021-05-28 08:00:36',
                'nama' => 'Dewananta',
                'nomor' => '0816565542323',
                'email' => 'zaki@gmail.com',
                'isi' => 'oke',
                'status' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2021-05-28 08:17:56',
                'updated_at' => '2021-05-28 08:17:56',
                'nama' => 'aku',
                'nomor' => '0816565542323',
                'email' => 'seto@gmail.com',
                'isi' => 'sds',
                'status' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2021-05-28 08:20:48',
                'updated_at' => '2021-05-28 08:20:48',
                'nama' => 'Dewananta',
                'nomor' => '0816565542323',
                'email' => 'devandewananta@gmail.com',
                'isi' => 'efe',
                'status' => 0,
            ),
        ));
        
        
    }
}