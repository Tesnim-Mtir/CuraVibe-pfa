<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Définir les attributs mass assignable (attributs pouvant être remplis par l'utilisateur)
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    // Définir les attributs cachés (attributs qui ne seront pas inclus dans les tableaux JSON retournés)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Définir les attributs que vous souhaitez traiter comme des dates
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Définir les règles de validation si nécessaire
    public static $rules = [
        // Vos règles de validation ici...
    ];
}
