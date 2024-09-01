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
        Schema::create('parent_users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('login', 50)->unique();
            $table->string('password', 255);
            $table->double('balance')->default(0);
            $table->text('review')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_users');
    }
};