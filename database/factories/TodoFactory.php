<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3), // Random 3 words
        'description' => $faker->paragraph(4), // Generates four sentences
        'completed' => false
    ];
});
