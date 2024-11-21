<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailOrder extends Model
{
    use HasFactory;
    protected $guarded =[];
      public function orderdetail() : BelongsTo{
        return $this->belongsTo(Order::class, 'order_id','id');
    }
}
