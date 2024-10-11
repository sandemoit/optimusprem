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
        Schema::create('products_variant', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->integer('productId');
            $table->string('name_variant');
            $table->string('slug');
            $table->boolean('status')->default(1);
            $table->integer('variantPrice');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_variant');
    }
};
