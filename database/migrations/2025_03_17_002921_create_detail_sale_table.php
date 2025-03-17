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
        Schema::create('detail_sale', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sale')->constrained('sales')->cascadeOnDelete();
            $table->foreignId('id_product')->constrained('products');
            $table->integer('quantity');
            $table->float('price_unitary');
            $table->float('sub_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sale');
    }
};
