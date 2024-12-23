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
        Schema::create('site_inscricao', function (Blueprint $table) {
            $table->id();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('label1')->nullable();
            $table->string('icone1')->nullable();
            $table->longText('texto1')->nullable();
            $table->string('label2')->nullable();
            $table->string('icone2')->nullable();
            $table->longText('texto2')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_inscricao');
    }
};
