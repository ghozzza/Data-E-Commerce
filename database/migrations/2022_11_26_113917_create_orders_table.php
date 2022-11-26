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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('uname')->nullable(); //
            $table->string('email')->nullable(); //
            $table->string('number')->nullable(); //
            $table->string('status_web_notification')->default('not notified');
            $table->string('status_email_notification')->default('not notified');
            $table->string('transaction_id');
            $table->string('order_id');
            $table->string('gross_amount'); //
            $table->string('payment_type'); //
            $table->string('payment_code')->nullable();
            $table->string('pdf_url')->nullable();
            $table->timestamp('tgl_order');
            $table->date('tgl_mulai_langganan');
            $table->date('tgl_berakhir_langganan');
            $table->foreignId('paket_id')->constrained('pakets');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('orders');
    }
};
