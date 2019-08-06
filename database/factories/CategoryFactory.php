<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => $faker->slug(rand(1,4)),
    ];
});
