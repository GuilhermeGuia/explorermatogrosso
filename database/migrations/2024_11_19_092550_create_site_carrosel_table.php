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
        Schema::create('site_carrosel', function (Blueprint $table) {
            $table->id();
            $table->string('photo_0');
            $table->string(column: 'chapeu_0');
            $table->string('title_0');
            $table->string('color_0');
            $table->string('photo_1');
            $table->string(column: 'chapeu_1');
            $table->string('title_1');
            $table->string('color_1');
            $table->string('photo_2');
            $table->string(column: 'chapeu_2');
            $table->string('title_2');
            $table->string('color_2');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_carrosel');
    }
};
