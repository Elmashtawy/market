<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        
        'category_id' => factory('App\Category')->create()->id,
    	'name' => $faker->name,
        'description' => $faker->text,
        'photo' => $faker->word,
        'price' => $faker->randomDigitNotNull,
        'quantity' => $faker->randomDigitNotNull,
        'offer' => $faker->randomDigitNotNull,
        'expire_offer' => $faker->time($format = 'H:i:s', $max = 'now'),
        'selling' => $faker->randomDigitNotNull,

    ];
});
