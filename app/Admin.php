<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use Notifiable;

    protected $guard='admin';


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
}
