<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'delivery_id',
        'firstName',
        'lastName',
        'mobile',
        'addressLine1',
        'addressLine2',
        'status',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
}
