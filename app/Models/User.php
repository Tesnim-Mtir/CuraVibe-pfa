<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory,  Notifiable,TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    protected $table = 'users';
    public function recycles()
    {
    return $this->hasMany(Recycle::class);
    }
    public function historiques()
    {
        return $this->hasMany(Historique::class);
    }
    public function don()
    {
    return $this->hasMany(Don::class);
    }
    public function traitements()  // Ajout de la relation traitements
    {
        return $this->hasMany(Traitment::class);
    }
    public function allergyUsers()
    {
        return $this->hasMany(Allergy_user::class);
    }
}


