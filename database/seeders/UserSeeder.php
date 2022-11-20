<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            DB::table('users')->insert([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => Hash::make('abc12345'),
                'id_roles' => rand(1, 2),
                'no_telp' => rand(),
                'verifikasi' => rand(),
            ]);
        }
    }
}
