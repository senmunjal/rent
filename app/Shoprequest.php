<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoprequest extends Model
{
    public function owner()
    {
        return $this->hasOne(Owner::class);
    }

    public function shop()
    {
        return $this->hasOne(Shop::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
