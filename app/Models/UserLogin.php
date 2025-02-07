<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class UserLogin extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $table = 'user_login';
    protected $fillable = [
        'email', 'password',
    ];
    protected $hidden = [
        'password',
    ];
}
