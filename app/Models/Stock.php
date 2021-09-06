<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    /**
    * Get the product that owns the stock.
    */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
    * Get the warehouse that owns the stock.
    */
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
