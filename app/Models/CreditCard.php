<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'ownerFirstName',
        'ownerLastName',
        'cardsNumbers',
        'expirationDate',
        'expirationDate',
        'cvv',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
