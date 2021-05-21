<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public $fillable = [
        'id',
        'name',
        'price',
        'description',
        'brand',
        'variant',
        'url',
        'product_id',
        'active',
        'created_at'
];
}
