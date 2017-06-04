<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Visit::class, function (Faker\Generator $faker) {

    return [
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'hour' => $faker->time($format = 'H:i:s', $max = 'now') ,
        'occurrence_type' => $faker->numberBetween($min = 1, $max = 5),
        'referrals' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'comments' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'woman_comments' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'aggressor_comments' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'users_id' => $faker->numberBetween($min = 1, $max = 100),
        'women_id' => $faker->numberBetween($min = 1, $max = 100),
        'aggressors_id' => $faker->numberBetween($min = 1, $max = 100),

    ];
});
