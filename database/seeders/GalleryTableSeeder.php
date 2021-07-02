<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery')->delete();
        
        \DB::table('gallery')->insert(array (
            0 => 
            array (
                'id' => 6,
                'created_at' => '2021-05-04 09:22:44',
                'updated_at' => '2021-05-04 09:22:44',
                'file_name' => '20210504092244-577.jpg',
                'keterangan' => 'dieng',
            ),
        ));
        
        
    }
}