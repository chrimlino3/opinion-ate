<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Dish::class, function (Faker $faker) {
    return [
        'name' => $faker->food,
        'rating' => $faker->rating,
    ];
});
