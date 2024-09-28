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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_owner_id')->constrained('hotel_owners')->onDelete('cascade');
            $table->string('name');
            $table->json("images")->nullable();
            $table->string('min_price')->nullable();
            $table->string('max_price')->nullable();
            $table->json('room_types')->nullable();
            $table->boolean('verified')->default(false);
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
