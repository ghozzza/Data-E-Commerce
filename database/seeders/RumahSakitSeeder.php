<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RumahSakitSeeder extends Seeder
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
            DB::table('rumah_sakits')->insert([
                'nama' => 'Rumah Sakit ' . $faker->name,
                'alamat' => $faker->address,
                'no_telp' => rand(),
            ]);
        }
    }
}
