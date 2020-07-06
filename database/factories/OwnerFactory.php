<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Owner::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('test@123'), // password
        'permanent_address'=>'Haldwani',
        'current_address'=>$faker->address,
        'status'=>'0',
        'phoneno'=>$faker->phoneNumber,
        'shop_count'=>$faker->randomDigitNotNull,
        'profile_pic'=>$faker->imageUrl($width = 200, $height = 200),
        'phone_verified_at'=>now(),
        'aadhaar_no'=>$faker->numerify($string='############')
    ];
});
