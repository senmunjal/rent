<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoprequest extends Model
{
    
    protected  $primaryKey = 'id';

    public function shop()
    {
        return $this->belongsTo(Shop::class,'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class,'id');
    }
}
