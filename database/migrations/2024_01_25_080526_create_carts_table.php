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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('item_name')->nullable();
            $table->string('item_image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('merchant_email')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
