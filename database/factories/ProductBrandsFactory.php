<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ProductBrand;
use Faker\Generator as Faker;

$factory->define(ProductBrand::class, function (Faker $faker) {
    return [
        'product_id' => factory('App\Product')->create()->id,
        'brand_id' => factory('App\Brand')->create()->id,

    ];
});
