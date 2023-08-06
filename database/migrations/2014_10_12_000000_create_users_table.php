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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->unique();
            $table->string('name');
            $table->string('image')->nullable();
        });

        Schema::create('product_book', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->unique();
            $table->string('category_uid');
            $table->string('name_produk');
            $table->string('image');
            $table->integer('amount');
            $table->string('title');
            $table->string('address');
            $table->string('deskripsi');
            $table->integer('price');
            $table->foreign(['category_uid'])->references(['uid'])->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('category');
    }
};
