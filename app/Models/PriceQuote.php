<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceQuote extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function products()
    {
        return $this->hasMany(Product::class, 'priceQuote_id');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'priceQuote_id');
    }
}
