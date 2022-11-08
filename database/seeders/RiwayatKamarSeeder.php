<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RiwayatKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i <= 10; $i++) {
            DB::table('riwayat_kamars')->insert([
                'tanggal' => $faker->dateTime,
                'nama_kamar' => 'Kamar ' . $faker->lastName,
                'jml_kosong' => rand(1,10),
                'jml_ruang' => rand(1,10),
                'jml_terisi' => rand(1,10),
            ]);
        }
    }
}
