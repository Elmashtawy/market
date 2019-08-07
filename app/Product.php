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
        return $this->belongsTo('App\Brand', 'brand_id', 'id');
    }

    protected $fillable = [
        'id', 'name', 'email', 'password',
    ];
    
}
