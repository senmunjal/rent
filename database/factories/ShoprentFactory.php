<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shoprent;
use Faker\Generator as Faker;

$factory->define(Shoprent::class, function (Faker $faker) {
    return [
        'shop_rented_at'=>now(),
        'user_id'=>factory(\App\User::class),
        'shop_id'=>factory(\App\Shop::class)
    ];
});
