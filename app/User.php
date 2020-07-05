<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected  $primaryKey = 'id';

    protected $fillable = [
        'name',
        'password',
        'location',
        'status',
        'phoneno',
        'rented_shop',
        'profile_pic',
        'aadhaar_no',
        'email',
    ];

    protected $hidden = ['password', 'remeber_token'];

    protected $cast = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime'
    ];

    public function shop()
    {
        return $this->hasMany(Shop::class, 'id');
    }
}
