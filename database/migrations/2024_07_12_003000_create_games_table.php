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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('genre');
            $table->integer('min_players');
            $table->integer('max_players');
            $table->string('age_range');
            $table->enum('difficulty', ['Easy', 'Medium', 'Hard', 'Expert']);
            $table->decimal('rental_price', 8, 2);
            $table->decimal('purchase_price', 8, 2);
            $table->integer('stock_quantity');
            $table->boolean('available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};