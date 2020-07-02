<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Shop extends Model
{
    public function owner(){
        return $this->hasOne(Owner::class);
    }

}
