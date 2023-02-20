<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        'ratting' => $faker->numberBetween(1, 5),
        'user_id' => $faker->numberBetween(1, 3000),
    ];
});
