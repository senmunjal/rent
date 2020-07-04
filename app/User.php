<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected  $primaryKey = 'user_id';
    
    public function shop()
    {
        return $this->hasMany(Shop::class,'shop_id');
    }
}
