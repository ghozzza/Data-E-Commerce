<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RiwayatDataDapodikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $sekolahs = DB::table('sekolahs')->get();
        $sekolahs_count = DB::table('sekolahs')->count();
        for ($i = 0; $i <= 10; $i++) {
            DB::table('riwayat_data_dapodiks')->insert([
                'tahun' => $faker->year,
                'bulan' => rand(1, 12),
                'id_sekolah' => $sekolahs[rand(1, $sekolahs_count - 1)]->id,
                'jml_rombel' => rand(1, 30),
                'jml_guru' => rand(1, 30),
                'jml_peserta_didik' => rand(30, 300),
                'jml_tendik' => rand(1, 30),
            ]);
        }
    }
}
