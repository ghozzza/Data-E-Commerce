<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProfilUserSeeder extends Seeder
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
        $users = DB::table('users')->get();
        for ($i = 0; $i <= 10; $i++) {
            DB::table('profil_users')->insert([
                'id_user' => $users[$i]->id,
                'alamat' => $faker->address,
                'regency_id' => $regencies[rand(1, 514)]->id,
            ]);
        }
    }
}
