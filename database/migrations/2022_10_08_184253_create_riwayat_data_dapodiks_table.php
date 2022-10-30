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
        Schema::create('riwayat_data_dapodiks', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->integer('bulan');
            $table->foreignId('id_sekolah')->constrained{'sekolahs'};
            $table->integer('jml_rombel');
            $table->integer('jml_guru');
            $table->integer('jml_peserta_didik');
            $table->integer('jml_tendik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_data_dapodiks');
    }
};
