<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, 50),
        'street' => $faker->streetName,
        'number' => $faker->numberBetween(1, 10)
    ];
});