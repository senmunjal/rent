<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected  $primaryKey = 'id';

    public function shoprequests()
    {
        return $this->hasMany(Shoprequest::class,'id');
    }

}
