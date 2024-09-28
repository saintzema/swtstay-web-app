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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained()->onDelete('cascade');
            $table->string('room_number');
            $table->string('room_type');
            $table->string('bed_type')->nullable();
            $table->string('price');
            $table->boolean('availability')->default(true);
            $table->integer('max_occupancy')->nullable();
            $table->integer('max_adult')->nullable();
            $table->integer('max_children')->nullable();
            $table->longText('description')->nullable();
            $table->json('images')->nullable();
            $table->json('facilities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
