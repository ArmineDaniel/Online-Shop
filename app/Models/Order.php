<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
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
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
}
