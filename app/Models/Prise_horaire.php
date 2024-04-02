<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prise_horaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'heure_prise'
    ];

    public function traitment()
    {
        return $this->belongsTo(Traitment::class);
    }
}
