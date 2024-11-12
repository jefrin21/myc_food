<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function details():HasMany{
        return $this->hasMany(DetailOrder::class, 'order_id','id');
    }

      public function customer():BelongsTo{
        return $this->belongsTo(User::class, 'customer_id','id');
    }
}
