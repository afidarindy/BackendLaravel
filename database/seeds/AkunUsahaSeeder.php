<?php

use Illuminate\Database\Seeder;
use App\AkunUsaha;

class AkunUsahaSeeder extends Seeder
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
                'nama_usaha' => 'toko roti mega',
                'deskripsi_usaha' => 'membuat roti',
                'alamat_kota' => 'solo',
                'alamat_provinsi' => 'jawa tengah',
                'alamat_lengkap' => 'solo, jawa tengah',
                'email' => 'tokorotimega@gmail.com',
                'link_gmaps' => '',
                'foto_usaha' => '',
                'password' => '',
                'id_kategori_usaha' => 7,
            ],
            ];

            AkunUsaha::insert($data);
    }
}
