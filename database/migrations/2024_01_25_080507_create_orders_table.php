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
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('billing_name');
            $table->string('billing_address');
            $table->decimal('latitude', 15, 7); // 15 total digits, 13 of which are after the decimal point
            $table->decimal('longitude', 15, 7);
            $table->string('billing_email');
            $table->string('payment');
            $table->integer('subtotal')->nullable();
            $table->integer('shipping_cost')->nullable();
            $table->integer('tax')->nullable();
            $table->bigInteger('total')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('order_tracking_id')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
