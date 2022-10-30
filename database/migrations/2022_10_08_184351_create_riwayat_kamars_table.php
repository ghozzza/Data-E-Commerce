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
        Schema::create('riwayat_kamars', function (Blueprint $table) {
            $table->id();
            $table->timestamps('tanggal');
            $table->string('nama_kamar');
            $table->int('jml_kosong');
            $table->int('jml_ruang');
            $table->int('jml_terisi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_kamars');
    }
};
