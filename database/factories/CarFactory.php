<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {

    return [
        'make'=>$faker->randomElement($array=array('ford', 'honda', 'toyota')),
        'model'=>$faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
        'year'=>$faker->year(),

    ];
});
