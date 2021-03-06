<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shoprequest;
use Faker\Generator as Faker;

$factory->define(Shoprequest::class, function (Faker $faker) {
    return [
        'shop_requested_at'=>now(),
        'user_id'=>$faker->numerify($string= "#"),
        'shop_id'=>'16',
        'owner_id'=>'3',
        'shop_allocated'=>'pending'
    ];
});
