<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Owner extends Authenticatable
{
    
    use Notifiable;
    protected  $primaryKey = 'id';

    protected $guard='owner';


    protected $fillable = [
        'name',
        'password',
        'permanent_address',
        'current_address',
        'status',
        'phoneno',
        'rented_shop',
        'profile_pic',
        'aadhaar_no',
        'shop_count',
        'email'
    ];

    protected $hidden = ['password', 'remeber_token'];

    protected $cast = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime'
    ];

    public function shop()
    {
        return $this->hasMany(Shop::class,'id');
    }
}
