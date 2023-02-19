<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'room_number' => $faker->unique()->numberBetween(1, 50),
        'room_size' => $faker->numberBetween(1, 5),
        'room_price' => $faker->numberBetween(100, 999),
        'description' => $faker->text(1000),
    ];
});
