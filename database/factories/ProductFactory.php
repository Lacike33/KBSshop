<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'category_id'=> $faker->numberBetween(1,5),
        'name'=> $faker->word,
        'description'=>$faker->text(255),
//        'description'=>$faker->paragraphs(rand(1,4)),
        'slug'=>$faker->unique()->slug,
        'price'=>$faker->randomFloat(2,5,1000),
    ];
});
