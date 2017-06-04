<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Aggressor::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'victim_relationship' => $faker->randomElement($array = array ('marido','irmão','primo')),
        'violence_type' => $faker->randomElement($array = array ('física','moral','partimonial')),
        'relapse' => $faker->boolean($chanceOfGettingTrue = 50),
        'work_address' => $faker->streetName,
        'ethnicity' => $faker->randomElement($array = array ('preta','parda','branca')),
        'relationship_time' => $faker->numberBetween($min = 1, $max = 50),
        'violence_habits' => $faker->boolean($chanceOfGettingTrue = 50),
        'age' => $faker->numberBetween($min = 15, $max = 90),
        'enrollment' => $faker->randomElement($array = array ('superior completo','ensino médio','ensino fundamental')),
        'comments' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
