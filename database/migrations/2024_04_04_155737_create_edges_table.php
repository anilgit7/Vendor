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
        Schema::create('edges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->decimal('lat1', 10, 8); // Change precision and scale as needed
            $table->decimal('lng1', 11, 8);
            $table->decimal('lat2', 10, 8); // Change precision and scale as needed
            $table->decimal('lng2', 11, 8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edges');
    }
};
