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
        Schema::create('cliniques', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('region');
            $table->string('location');
            $table->time('open_time');
            $table->time('close_time');
            $table->string('image')->nullable();
            $table->string('working_days');
            $table->string('closing_days')->nullable();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliniques');
    }
};
