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
        'company_id' => $faker->numberBetween(1, 3),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'meta' => [
            'settings' => [
                'site_background' => 'white',
                'site_language' => 'en'
            ],
            'skills' => $faker->randomElement([
                'PHP','Js', 'Laravel', 'Wordpress', 'Node', 'Vue'
            ], mt_rand(1, 6)),
            'gender' => $faker->randomElement([
                'Male', 'Female', 'Others'
            ])
        ],
    ];
});
