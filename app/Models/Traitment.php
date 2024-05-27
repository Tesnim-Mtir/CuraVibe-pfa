<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medicament_id',
        'periode_traitment',
        'start_date',
        'end_date',
    ];
    public function prisesHoraires()
    {
        return $this->hasMany(Prise_horaire::class);
    }



    public function medicament()
    {
        return $this->belongsTo(Medicament::class);
    }

    public function historique()
    {
        return $this->hasOne(Historique::class);
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

    public function allergies()
    {
        return $this->belongsToMany(Traitment_Allergy::class);
    }
    
   
}
