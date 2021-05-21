<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public $fillable = [
        'id',
        'publisher',
        'type',
        'name',
        'price',
        'product_url',
        'content_id',
        'date',
        'description',
        'country',
        'store_id',
        'online',
        'brand',
        'variant',
        'url',
        'product_id',
        'active',
        'created_at'
];
}
