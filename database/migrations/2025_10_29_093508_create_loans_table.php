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
        Schema::create('loans', function (Blueprint $table) {
            $table->id('id_loan');  
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_book');
            $table->date('loan_date');
            $table->date('return_date');
            $table->enum('status', ['PENDING', 'RETURNED', 'LOST'])->default('PENDING');
            $table->timestamps();
            
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_book')->references('id_book')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
