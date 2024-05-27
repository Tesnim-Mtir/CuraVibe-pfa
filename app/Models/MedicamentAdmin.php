<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentAdmin extends Model
{
    use HasFactory;
    protected $table = "medicament";
    public $timestamps = false;

    protected $fillable = [
        'Nom',
        'Dosage',
        'Forme',
        'Présentation',
        'DCI',
        'Classe',
        'Sous_Classe',
        'Laboratoire',
        'AMM',
        'Date_AMM',
        'Conditionnement_primaire',
        'Spécifocation_Conditionnement_primaire',
        'tableau',
        'Durée_de_conservation',
        'Indications',
        'G_P_B',
        'VEIC',
    ];
}
