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
            $table->int('tahun');
            $table->int('bulan');
            $table->int('id_sekolah');
            $table->int('jml_rombel');
            $table->int('jml_guru');
            $table->int('jml_peserta_didik');
            $table->int('jml_tendik');
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
