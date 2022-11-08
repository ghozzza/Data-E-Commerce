<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RiwayatOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $users = DB::table('users')->get();
        $pakets = DB::table('pakets')->get();
        $users_count = DB::table('users')->count();
        $pakets_count = DB::table('pakets')->count();
        for ($i = 0; $i <= 5; $i++) {
            $date = $faker->date;
            $date1 = str_replace('-', '/', $date);
            $addDate = strtotime($date1 . "+" . rand(1, 30) . " day");
            DB::table('riwayat_orders')->insert([
                'id_user' => $users[rand(1, $users_count)]->id,
                'tgl_order' => $faker->dateTime,
                'id_paket' => $pakets[rand(1, $pakets_count)]->id,
                'status_order' => 'sukses',
                'tgl_mulai_langganan' => $date,
                'tgl_berakhir_langganan' => date('Y-m-d', $addDate),
            ]);
        }
    }
}
