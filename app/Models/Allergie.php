<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergie extends Model
{
    use HasFactory;




    protected $fillable = ['name'];

    // Définissez la relation avec le modèle AllergyUser
    public function allergyUsers()
    {
        return $this->hasMany(Allergy_user::class);
    }


    public function traitmentAllergies()
    {
        return $this->hasMany(traitment_allergy::class);
    }

    public function medicaments()
{
    return $this->belongsToMany(Medicament::class);
}

}
