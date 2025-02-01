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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('capacity');
            $table->string('transmission');
            $table->text('description');
            $table->string('image')->nullable();
            $table->text('features')->nullable(); // Store features as JSON
            $table->integer('order')->default(0); // For custom ordering
            $table->enum('status', ['available', 'in_use'])->default('available');
            $table->string('wa_link'); // Store full WhatsApp link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
