<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'title' => $faker->text(30),
        'announcement' => $faker->sentence,
        'description' => $faker->paragraph,
        'type_id' => $faker->numberBetween(1,3)
    ];
});