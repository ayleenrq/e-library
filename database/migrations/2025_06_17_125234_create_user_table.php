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
        Schema::create('user', function (Blueprint $table) {
            $table->id('id_user');
            $table->enum('role', ['USER', 'ADMIN'])->default('USER');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('telp', 15)->unique()->nullable();
            $table->string('address', 255)->nullable();
            $table->string('reset_token', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
