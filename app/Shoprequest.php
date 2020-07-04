<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoprequest extends Model
{
    
    protected  $primaryKey = 'shoprequest_id';

    public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
