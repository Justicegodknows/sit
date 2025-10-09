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
        Schema::create('productsolds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('author_id')->constrained()->onDelete('cascade');
            $table->foreignId('productcategories_id')->constrained('productcategories')->onDelete('cascade');
            $table->decimal('price', 10, 2);
            $table->date('sold_at');
            $table->string('description')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productsolds');
    }
};
