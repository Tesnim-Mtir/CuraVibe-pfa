<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'traitment_id', 'date_prise', 
    ];

    // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le modèle Traitment
    public function traitment()
    {
        return $this->belongsTo(Traitment::class);
    }
}
