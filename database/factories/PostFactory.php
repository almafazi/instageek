<?php

use Faker\Generator as Faker;

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

$factory->define(
    \App\Models\Post::class, function (Faker $faker) {
    $randomId = App\Models\User::pluck('id');

    return [
        'user_id'   => $randomId->random(),
        'photo'     => $faker->image(),
        'like_count'    => $faker->numberBetween($min = 1000, $max = 9000),
        'comment_count' => $faker->numberBetween($min = 1000, $max = 9000),
        'caption'   => $faker->realText($maxNbChars = 200),
        'location'  => $faker->address,
    ];
});
