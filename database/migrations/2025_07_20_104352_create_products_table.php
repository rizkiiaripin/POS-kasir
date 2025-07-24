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
            $table->text('image');
            $table->string('name');
            $table->integer('stock');
            $table->string('barcode')->unique()->nullable();
            $table->decimal('price', 8, 2);
            $table->text('description')->nullable();
            $table->foreignId('category_id')
                ->onDelete('cascade');
            $table->foreignId('unit_id')
                ->onDelete('cascade');
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
