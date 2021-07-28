<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('position')->delete();
        
        \DB::table('position')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_posisi' => 'highlight',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_posisi' => 'menu_atas',
            ),
        ));
        
        
    }
}