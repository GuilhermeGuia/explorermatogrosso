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
        Schema::create('service_pages', function (Blueprint $table) {
            $table->id();

            $table->foreignId("user_id")->references('id')->on('users');
            $table->foreignId('citye_id')->references('id')->on('cityes');
            $table->foreignId('service_type_id')->references('id')->on('service_type');
            $table->string('slug')->unique();
            $table->string('title')->default('Titulo da Página');          
            $table->string('title_conteudo')->default('Title do Conteúdo');
            $table->longText('conteudo')->nullable();
            $table->string('foto_principal')->nullable();
            $table->json('fotos_slider')->nullable();
            $table->longText("maps")->nullable();
            $table->boolean("active")->default(false);                      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_pages');
    }
};
