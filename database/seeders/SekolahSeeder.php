<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $regencies = DB::table('regencies')->get();
        for ($i = 0; $i <= 10; $i++) {
            DB::table('sekolahs')->insert([
                'npsn' => rand(100000000, 99999999),
                'nama' => 'SMA ' . $faker->lastName,
                'regency_id' => $regencies[rand(1, 514)]->id,
                'alamat' => $faker->address,
                'nama_kepsek' => $faker->name,
                'nip' => rand(1000, 9999),
                'no_telp_kepsek' => rand(),
                'id_jenis_sekolah' => rand(1, 10),
                'email' => $faker->email,
            ]);
        }
    }
}
// 20534383
