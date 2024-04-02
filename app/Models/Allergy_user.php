<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy_user extends Model
{
    use HasFactory;



    protected $fillable = [
        'user_id', 'allergy_id',
    ];

    // Définissez la relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Définissez la relation avec le modèle Allergy
    public function allergy()
    {
        return $this->belongsTo(Allergie::class);
    }


    
}
