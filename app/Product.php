<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected  $primaryKey = 'product_id';
    protected  $fillable =
        ['category_id',
        'rating_cache',
        'rating_count',
        'product_name'
        ,'short_description',
        'long_description',
        'price',
        'icon'];


}

