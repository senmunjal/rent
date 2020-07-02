<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Owner::class, function (Faker $faker) {
    return [
        'owner_name' => $faker->name,
        'owner_email' => $faker->unique()->safeEmail,
        'owner_email_verified_at' => now(),
        'owner_password' => bcrypt('test'), // password
        'owner_permanent_address'=>'Haldwani',
        'owner_current_address'=>$faker->address,
        'owner_status'=>'1',
        'owner_phoneno'=>$faker->phoneNumber,
        'owner_shop_count'=>$faker->randomDigitNotNull,
        'owner_profile_pic'=>$faker->imageUrl($width = 200, $height = 200),
        'owner_phone_verified_at'=>now(),
        'owner_aadhaar_no'=>$faker->numerify($string='############')
    ];
});
