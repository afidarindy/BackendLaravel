<?php

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
        // $this->call(UserSeeder::class);
        $this->call(KategoriUsahaSeeder::class);
        $this->call(AkunUsahaSeeder::class);
        $this->call(LokerSeeder::class);
        $this->call(PelamarKerjaSeeder::class);
    }
}
