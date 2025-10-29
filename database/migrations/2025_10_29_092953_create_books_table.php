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
        Schema::create('books', function (Blueprint $table) {
            $table->id('id_book');
            $table->unsignedBigInteger('id_category');
            $table->string('title', 100);
            $table->string('author', 100);
            $table->string('publisher', 100);
            $table->string('year_published', 100);
            $table->string('isbn', 100);
            $table->string('pages', 100);
            $table->string('stock', 100);
            $table->string('location', 100);
            $table->timestamps();
            
            $table->foreign('id_category')->references('id_categorie')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
