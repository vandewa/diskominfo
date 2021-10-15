<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class YoutubeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('youtube')->delete();
        
        \DB::table('youtube')->insert(array (
            0 => 
            array (
                'id' => 1,
                'link' => 'https://www.youtube.com/embed/d7uBeYW56gc',
                'created_at' => '2021-04-25 11:40:45',
                'updated_at' => '2021-04-25 12:04:07',
            ),
            1 => 
            array (
                'id' => 2,
                'link' => 'https://www.youtube.com/embed/8wy_IxEjDqs',
                'created_at' => '2021-04-25 11:56:47',
                'updated_at' => '2021-04-25 11:56:47',
            ),
            2 => 
            array (
                'id' => 5,
                'link' => 'https://www.youtube.com/embed/AuJf0nFJHNY',
                'created_at' => '2021-04-27 13:28:54',
                'updated_at' => '2021-05-18 13:40:07',
            ),
        ));
        
        
    }
}