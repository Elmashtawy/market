<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        
          'tax' => $faker->randomDigitNotNull,
          'shiping' => $faker->randomDigitNotNull,
          'total_amount' => $faker->randomDigitNotNull,
          'user_id' => factory('App\User')->create()->id,
    ];
});
