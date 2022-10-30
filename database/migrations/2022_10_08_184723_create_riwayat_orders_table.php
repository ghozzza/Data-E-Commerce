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
        Schema::create('riwayat_orders', function (Blueprint $table) {
            $table->id();
            $table->int('id_user');
            $table->timestamp('tgl_order');
            $table->int('id_paket');
            $table->string('status_order');
            $table->timestamp('tgl_mulai_langganan');
            $table->timestamp('tgl_berakhir_langganan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_orders');
    }
};
