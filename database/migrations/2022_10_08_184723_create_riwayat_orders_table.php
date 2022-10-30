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
            $table->integer('id_user');
            $table->timestamp('tgl_order');
            $table->foreignId('id_paket')->constrained('pakets');
            $table->string('status_order');
            $table->datetime('tgl_mulai_langganan');
            $table->datetime('tgl_berakhir_langganan');
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