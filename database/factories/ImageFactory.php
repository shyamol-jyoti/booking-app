<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'item_id' => $faker->randomElement([1,2,3]),
        'image_name' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
