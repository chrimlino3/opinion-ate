<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

$factory->define(App\Dish::class, function (Faker $faker) {
    return [
        'restaurant_id' => factory(\App\Restaurant::class),
        'name' => $faker->text,
        'rating' => $faker->randomDigit,
    ];
});
