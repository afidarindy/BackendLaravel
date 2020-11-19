<?php

use Illuminate\Database\Seeder;
use App\PelamarKerja;

class PelamarKerjaSeeder extends Seeder
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
                'nama' => 'farel',
                'email' => 'farel@gmail.com',
                'password' => '',
                'tanggal_lahir' => '2000-04-05',
                'alamat' => 'sumenep',
                'gender' => 'L',
                'foto' => '',
            ],
            ];

            PelamarKerja::insert($data);
    }
}
