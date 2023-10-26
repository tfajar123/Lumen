<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('product_name');
            $table->integer('total_amount');
            $table->integer('total_price');
            $table->string('shipment_address');
            $table->enum('status', array('on_process','delivered'))->default('on_process');
            $table->enum('payment_methods', array('bank_transfer','ewallet'))->default('bank_transfer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
