<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orderDetails()
    {
        return $this->hasMany(DetailOrder::class, 'order_id');
    }

      public function customerDetails()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
