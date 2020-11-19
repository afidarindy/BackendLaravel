<?php

use Illuminate\Database\Seeder;
use App\Loker;

class LokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'judul_loker' => "pemanggang roti, toko roti mega",
                'job_description' => "memanggan roti di toko roti mega",
                'persyaratan' => 'lulus smp',
                'gaji' => 2000000,
                'tanggal_kadaluarsa' => '2020-12-30',
                'id_usaha' => 1,
            ],
            ];

            Loker::insert($data);
    }
}
