<?php

use Illuminate\Database\Seeder;
use App\KategoriUsaha;

class KategoriUsahaSeeder extends Seeder
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
                'nama_kategori' => 'perdagangan',
            ],
            [
                'nama_kategori' => 'home industri',
            ],
            [
                'nama_kategori' => 'perikanan',
            ],
            [
                'nama_kategori' => 'peternakan',
            ],
            [
                'nama_kategori' => 'pertanian & perkebunan',
            ],
            [
                'nama_kategori' => 'kredit & jasa',
            ],
            [
                'nama_kategori' => 'UMKM',
            ],
            [
                'nama_kategori' => 'lainnya',
            ],
            ];

            KategoriUsaha::insert($data);
    }
}
