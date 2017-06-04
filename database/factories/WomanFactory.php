<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Woman::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'home_address' => $faker->streetName,
        'home_reference_point' => $faker->streetName,
        'home_neighborhood' => $faker->streetName,
        'phone' => $faker->cellphoneNumber,
        'meeting_address' => $faker->streetName,
        'meeting_reference_point' => $faker->streetName,
        'meeting_neighborhood' => $faker->randomElement($array = array ('Campo Grande, Salvador','Iguatemi, Salvador','Itaigara, Salvador', 'Avenida Adhemar de Barros, Salvador', 'Pituba, Salvador', 'Avenia Heitor Dias, Salvador')),
        'best_meeting_time' => $faker->numberBetween($min = 1000, $max = 9000),
        'marital_status' => $faker->randomElement($array = array ('casada','solteira','divorciada')),
        'children_amount' => $faker->randomDigit,
        'children_with_aggressor' => $faker->randomDigit,
        'enrollment' => $faker->randomElement($array = array ('superior completo','ensino médio','ensino fundamental')),
        'ethnicity' => $faker->randomElement($array = array ('preta','parda','branca')),
        'age' => $faker->numberBetween($min = 15, $max = 90),
        'religion' => $faker->randomElement($array = array ('catolica','evangelica','ateia')),
        'work' => $faker->word,
        'last_work' => $faker->word,
        'work_active' => $faker->boolean($chanceOfGettingTrue = 50),
        'work_place' => $faker->word,
        'income' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        'main_income_family' => $faker->randomElement($array = array ('propria','filho','marido')),
        'social_government_program' => $faker->randomElement($array = array ('bolsa familia','fies','pgg')),
        'mpu_number' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        'request_origin' => $faker->randomElement($array = array ('1 vara','2 vara','3 vara')),
    ];
});
