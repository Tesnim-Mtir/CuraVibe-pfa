<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;




    public function traitements()
    {
        return $this->hasMany(Traitment::class);
    }


    public function allergies()
{
    return $this->belongsToMany(Allergie::class);
}

}
