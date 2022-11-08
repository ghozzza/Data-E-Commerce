<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PaketSeeder extends Seeder
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
            DB::table('pakets')->insert([
                'nama' => $faker->word,
                'lama_langganan' => rand(1, 30),
                'harga' => rand(50000, 300000),
            ]);
        }
    }
}
