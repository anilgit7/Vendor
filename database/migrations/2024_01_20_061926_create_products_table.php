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
            $table->unsignedBigInteger('merchant_id');
            $table->string("product_name");
            $table->string('description', 5000);
            $table->string('slug');
            $table->integer("price");
            $table->string("color")->nullable();
            $table->string("size");
            $table->string("material")->nullable();
            $table->string("brand")->nullable();
            $table->string("weight")->nullable();
            $table->string("warranty")->nullable();
            $table->string("images")->nullable();
            $table->integer('sold')->default(0);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('merchant_id')->references('id')->on('users')->onDelete('cascade');
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
