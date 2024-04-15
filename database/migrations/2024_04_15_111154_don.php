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
        Schema::create('don', function (Blueprint $table) {
            $table->id();
            $table->string('utilisateur')->nullable();
            $table->string('numero')->nullable();
            $table->string('etat')->nullable();
            $table->string('nom');
            $table->string('quantite')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don');
    }
};
