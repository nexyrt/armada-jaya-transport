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
            $table->text('wa_template');
            $table->enum('status', ['available', 'in_use'])->default('available');
            $table->decimal('lepas_kunci_price', 10, 2);
            $table->decimal('carter_dalam_price', 10, 2);
            $table->decimal('carter_luar_price', 10, 2);
            $table->decimal('regular_price', 10, 2);
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
