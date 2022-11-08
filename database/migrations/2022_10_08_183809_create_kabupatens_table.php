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
        // Schema::create('kabupatens', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('kode');
        //     $table->foreignId('id_provinsi')->constrained('provinsi');
        //     $table->string('nama');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('kabupatens');
    }
};
