<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SampulTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sampul')->delete();
        
        \DB::table('sampul')->insert(array (
            0 => 
            array (
                'id' => 1,
                'file_name' => 'kominfo.jpg',
                'created_at' => '2021-05-18 09:48:34',
                'updated_at' => '2021-05-18 11:50:45',
            ),
        ));
        
        
    }
}