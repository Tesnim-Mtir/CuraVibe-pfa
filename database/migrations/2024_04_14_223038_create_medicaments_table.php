<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      
        
        if (!Schema::hasTable('medicament')) {
        Schema::create('medicament', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('Dosage');
            $table->string('Forme');
            $table->string('Présentation');
            $table->string('DCI');
            $table->string('Classe');
            $table->string('Sous_Classe');
            $table->string('Laboratoire');
            $table->string('AMM');
            $table->string('Date_AMM');
            $table->string('Conditionnement_primaire');
            $table->string('Spécifocation_Conditionnement_primaire');
            $table->string('tableau');
            $table->integer('Durée_de_conservation');
            $table->string('Indications');
            $table->string('G_P_B');
            $table->string('VEIC');
            Schema::table('medicament', function (Blueprint $table) {
            $table->timestamps();
            });
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicament');
    }
}
