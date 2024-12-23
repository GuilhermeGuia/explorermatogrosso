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
        Schema::create('categoria_service_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId("categoria_id")->references('id')->on('categoria')->cascadeOnDelete();
            $table->foreignId('service_pages_id')->references('id')->on('service_pages')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_service_pages');
    }
};
