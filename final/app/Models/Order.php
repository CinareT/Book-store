<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderProduct;


class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function products()
    // {
    //     return $this->belongsToMany(OrderProduct::class, 'order_products')->withPivot('quantity', 'price');
    // }
}
