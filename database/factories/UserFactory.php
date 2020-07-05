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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('test@123'), // password
        'remember_token' => Str::random(10),
        'location'=>'Haldwani',
        'status'=>'0',
        'phoneno'=>$faker->phoneNumber,
        'rented_shop'=>$faker->randomDigitNotNull,
        'profile_pic'=>$faker->imageUrl($width = 200, $height = 200),
        'phone_verified_at'=>now()
    ];
});
