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
            $table->int('npsn');
            $table->string('nama');
            $table->int('id_kecamatan');
            $table->string('alamat');
            $table->string('nama_kepsek');
            $table->int('nip');
            $table->int('no_telp_kepsek');
            $table->int('id_jenis_sekolah');
            $table->string('email');
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
