<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->integer('npsn');
            $table->string('nama');
            // $table->foreignId('id_kecamatan')->constrained('kecamatans');
            $table->foreignId('regency_id')->constrained('regencies');
            $table->text('alamat');
            $table->string('nama_kepsek');
            $table->integer('nip');
            $table->integer('no_telp_kepsek');
            $table->integer('id_jenis_sekolah');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sekolahs');
    }
};
