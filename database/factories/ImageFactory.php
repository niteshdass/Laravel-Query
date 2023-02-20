<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'imageable_type' => $faker->randomElement(['App\User', 'App\City']),
        'imageable_id' => $faker->numberBetween(1, 10),
        'path' => $faker->imageUrl(),
    ];
});
