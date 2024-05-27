<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    use HasFactory;

  
        protected $fillable = ['nom', 'contact', 'ville_id'];
        
        public function ville()
        {
            return $this->belongsTo('App\Ville');
        }
 
}
