<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traitment_allergy extends Model
{
    use HasFactory;

    protected $fillable = [
        'traitment_id', 'allergy_id',
    ];

    // Définissez la relation avec le modèle Traitment
    public function traitment()
    {
        return $this->belongsTo(Traitment::class);
    }


    public function allergy()
    {
        return $this->belongsTo(Allergie ::class);
    }



}
