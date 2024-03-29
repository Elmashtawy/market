<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
       
    	'name' => $faker->name,
        'description' => $faker->text,
        'photo' => $faker->word,
    ];
});
