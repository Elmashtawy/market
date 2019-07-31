<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function brands()
    {
        return $this->belongsToMany('App\Brand', 'product_brands', 'product_id', 'brand_id');
    }

    protected $fillable = [
        'id', 'name', 'email', 'password',
    ];
    
}
