<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        
        'shop_location'=>'Haldwani',
        'owner_id'=>'3',
        'shop_allocated'=>'0',
        'shop_rent'=>$faker->numerify($string= "####"),
        'shop_security'=>$faker->numerify($string= "####")
    ];
});
