<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PenulisSeeder extends Seeder
{
    public function run()
    {
        // Contoh data yang sudah dikomentari
        /*
        $data = [
            [
                'name'       => 'Tomy Syafrudin',
                'address'    => 'Jl Gus Dur no 15B Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'name'       => 'Agus Setiawan',
                'address'    => 'Jl Merdeka no 15B Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'name'       => 'Kang Dedi',
                'address'    => 'Jl Pattimura no 15B Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        */

        // Menggunakan Faker untuk menghasilkan data palsu
        $faker = \Faker\Factory::create('id_ID'); // 'id_ID' untuk lokal Indonesia

        for ($i = 0; $i < 10; $i++) { // Membuat 10 data penulis
            $data = [
                'name'       => $faker->name,
                'address'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()), // Menggunakan faker->unixTime()
                'updated_at' => Time::now(),
            ];
            $this->db->table('penulis')->insert($data);
        }
    }
}
