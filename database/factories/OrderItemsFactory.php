<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\OrderItem;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'product_id' => factory('App\Product')->create()->id,
        'order_id' => factory('App\Order')->create()->id,
        'product_price' => $faker->randomDigitNotNull,
        'quantity' => $faker->randomDigitNotNull,
        'sub_total' => $faker->randomDigitNotNull,
    ];
});
