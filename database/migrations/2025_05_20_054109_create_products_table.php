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
        $table->id('id_product');
        $table->string('name');
        $table->integer('quantity');
        $table->text('description')->nullable();
        $table->text('shipping_information')->nullable();
        $table->string('image')->nullable();
        $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
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
