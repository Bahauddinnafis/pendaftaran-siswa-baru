<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class UserModel extends Model implements AuthenticatableContract
{
    use HasFactory, HasApiTokens, Notifiable;
    use Authenticatable;
    protected $guard = 'user';
    protected $table= 'user';

    protected $fillable = [
        'nama_lengkap', 'email', 'password', 'no_telp', 'status_akun', 'total_price', 'status'
    ];

    protected $hidden = [
        'password',
    ];

}
