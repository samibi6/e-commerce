<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public static function getOrderDetails($orderId)
    {
        $order = OrderDetail::where('order_id', $orderId)->get();
        return $order;
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function OrderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
