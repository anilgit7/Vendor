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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string("product_name");
            $table->string('slug');
            $table->string("price");
            $table->string("color");
            $table->string("size");
            $table->string("material");
            $table->string("brand")->nullable();
            $table->string("weight");
            $table->string("warranty")->nullable();
            $table->string("shop_name");
            $table->string("shop_address")->nullable();
            $table->string("merchant_email");
            $table->string("images");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
