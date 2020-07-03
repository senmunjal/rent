<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected  $primaryKey = 'shop_id';

    public function shoprequests()
    {
        return $this->hasMany(Shoprequest::class,'shoprequest_id');
    }

}
