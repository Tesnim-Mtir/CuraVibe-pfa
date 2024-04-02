<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitment extends Model
{
    use HasFactory;


    public function prisesHoraires()
    {
        return $this->hasMany(Prise_horaire::class);
    }



    public function medicament()
    {
        return $this->belongsTo(Medicament::class);
    }


    public function notification()
    {
        return $this->hasOne(Notification::class);
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function traitmentAllergies()
    {
        return $this->hasMany(traitment_allergy::class);
    }


   
}
