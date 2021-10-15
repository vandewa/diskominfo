<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InfografisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('infografis')->delete();
        
        \DB::table('infografis')->insert(array (
            0 => 
            array (
                'id' => 3,
                'file_name' => '20210528053426_1.jpg',
                'judul' => 'Kemiskinan Kabupaten Wonosobo',
                'created_at' => '2021-05-28 17:34:26',
                'updated_at' => '2021-05-28 17:34:26',
                'created_by' => 1,
            ),
            1 => 
            array (
                'id' => 4,
                'file_name' => '20210528053502_1.jpg',
                'judul' => 'Infografis Ketimpangan Wilayah',
                'created_at' => '2021-05-28 17:35:02',
                'updated_at' => '2021-05-28 17:35:02',
                'created_by' => 1,
            ),
            2 => 
            array (
                'id' => 5,
                'file_name' => '20210528053711_1.jpg',
                'judul' => 'Penggunaan Subdomain dan Email wonosobokab.go.id Tahun 2020',
                'created_at' => '2021-05-28 17:37:11',
                'updated_at' => '2021-05-28 22:04:19',
                'created_by' => 1,
            ),
            3 => 
            array (
                'id' => 6,
                'file_name' => '20210528053757_1.jpg',
                'judul' => 'Nilai Tukar Petani',
                'created_at' => '2021-05-28 17:37:57',
                'updated_at' => '2021-05-28 17:37:57',
                'created_by' => 1,
            ),
        ));
        
        
    }
}