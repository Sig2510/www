<?php

use Faker\Generator as Faker;

$factory->define(App\Tasks::class, function (Faker $faker) {
    return [
        
        'tasks' => $faker->text(50),
        'assigned to' =>  $faker->randomNumber(5),
        'status' => $faker->text(5)
    ];
});
