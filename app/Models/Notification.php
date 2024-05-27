<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;


    protected $fillable = ['message', 'traitment_id'];

    // Définissez la relation avec le modèle Traitment
    public function traitment()
    {
        return $this->belongsTo(Traitment::class);
    }
}
