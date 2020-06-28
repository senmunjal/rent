<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'user_name' => $faker->name,
        'user_email' => $faker->unique()->safeEmail,
        'user_email_verified_at' => now(),
        'user_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'user_location'=>'Haldwani',
        'user_status'=>'1',
        'user_phone_no'=>$faker->phoneNumber,
        'user_rented_shop'=>$faker->randomDigitNotNull,
        'user_profile_pic'=>$faker->imageUrl($width = 200, $height = 200),
        'user_phone_verified_at'=>now()
    ];
});
