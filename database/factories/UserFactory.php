<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'gh' => $faker->numberBetween($min = 1000, $max = 9000),
        'role' => $faker->numberBetween($min = 1, $max = 3),
        'password' => $faker->unique()->word,
    ];
});
