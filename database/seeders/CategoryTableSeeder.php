<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 8,
                'nama_kategori' => 'Menu Utama',
                'updated_at' => '2021-04-19 14:12:01',
                'created_at' => '2021-04-19 14:12:01',
            ),
            1 => 
            array (
                'id' => 1,
                'nama_kategori' => 'Seputar Wonosobo',
                'updated_at' => '2021-03-29 09:55:40',
                'created_at' => '2021-04-01 16:25:54',
            ),
            2 => 
            array (
                'id' => 2,
                'nama_kategori' => 'Tidak Ditampilkan',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'nama_kategori' => 'Potensi Daerah',
                'updated_at' => '2021-04-21 12:54:39',
                'created_at' => '2021-03-29 09:55:40',
            ),
            4 => 
            array (
                'id' => 7,
                'nama_kategori' => 'Hoax',
                'updated_at' => '2021-05-28 13:04:34',
                'created_at' => '2021-05-28 13:04:35',
            ),
        ));
        
        
    }
}