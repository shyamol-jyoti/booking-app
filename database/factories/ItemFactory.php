<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'service_id' => $faker->randomElement([1,2,3]),
        'owner_id' => $faker->randomElement([1,2,3]),
        'title' => $faker->sentence(6),
        'type' => $faker->randomElement(['Sedan', 'XUV', 'Scooty', 'Housevilla', '2BHK Flat', '3BHK Flat']),
        'price' => $faker->numberBetween($min = 1000, $max = 9000),
        'price_type' => $faker->randomElement(['Per Day', 'Monthly']),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
