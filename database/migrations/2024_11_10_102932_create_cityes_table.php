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
        Schema::create('cityes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->references('id')->on('users');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('photo')->nullable();
            $table->string('color')->nullable();
            $table->string('video')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->json('galeria')->nullable();
            $table->string('title_adiconal')->nullable();
            $table->longText('description_adicional')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cityes');
    }
};
