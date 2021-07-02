<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LaratrustSeeder::class);
        $this->call(ComCodeSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PostingTableSeeder::class);
        $this->call(AksesDcsTableSeeder::class);
        $this->call(AttachmentTableSeeder::class);
        $this->call(AttachmentsTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ColocationServersTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(InfografisTableSeeder::class);
        $this->call(KomentarTableSeeder::class);
        $this->call(LampiranTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(PengumumanTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(SampulTableSeeder::class);
        $this->call(YoutubeTableSeeder::class);
    }
}
