<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Don extends Model

{
    use HasFactory;
    protected $table = 'Don';// Le nom de votre table dans la base de données

    protected $fillable = ['user_id', 'product'];
    public function user()
{
    return $this->belongsTo(User::class);
}

}