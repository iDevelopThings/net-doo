<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'amount',
        'state',
        'image_url'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products');
    }
}
