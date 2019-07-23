<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\OrderItem;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'product_id' => rand(1,10),
        'order_id' => factory('App\Order')->create()->id,
    ];
});
