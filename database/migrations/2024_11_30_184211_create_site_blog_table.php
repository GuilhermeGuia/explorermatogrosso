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
        Schema::create('site_blog', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('photo1')->nullable();
            $table->string('name1')->nullable();
            $table->string('url1')->default('#')->nullable();
            $table->string('photo2')->nullable();
            $table->string('name2')->nullable();
            $table->string('url2')->default('#')->nullable();
            $table->string('photo3')->nullable();
            $table->string('name3')->nullable();
            $table->string('url3')->default('#')->nullable();
            $table->string('photo4')->nullable();
            $table->string('name4')->nullable();
            $table->string('url4')->default('#')->nullable();
            $table->string('photo5')->nullable();
            $table->string('name5')->nullable();
            $table->string('url5')->default('#')->nullable();
            $table->string('photo6')->nullable();
            $table->string('name6')->nullable();
            $table->string('url6')->default('#')->nullable();
            $table->string('photo7')->nullable();
            $table->string('name7')->nullable();
            $table->string('url7')->default('#')->nullable();
            $table->string('photo8')->nullable();
            $table->string('name8')->nullable();
            $table->string('url8')->default('#')->nullable();
            $table->string('photo9')->nullable();
            $table->string('name9')->nullable();
            $table->string('url9')->default('#')->nullable();
            $table->string('photo10')->nullable();
            $table->string('name10')->nullable();
            $table->string('url10')->default('#')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_blog');
    }
};
