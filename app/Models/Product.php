<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'status',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }

    public function ShopCards()
    {
        return $this->belongsToMany(ShopCard::class, 'card_product');
    }
}
