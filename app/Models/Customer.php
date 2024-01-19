<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public static function getCustomersFromExpenses($amount)
    {


        $Customers = Customer::join('orders', 'customers.id', '=', 'orders.customer_id')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('articles', 'order_details.article_id', '=', 'articles.id')
            // ->select('customers.*')
            ->selectSub(
                OrderDetail::selectRaw('SUM(quantity * articles.price)')
                    ->whereColumn('orders.id', 'order_details.order_id'),
                'total_expenses'
            )
            // ->get()
            // ->dd()
            ->groupBy('customers.id')
            ->having('total_expenses', '>', $amount)
            ->get()
            ->dd();
    }

    public static function getExpensesByCustomer()
    {
        $first = Customer::join('orders', 'customers.id', '=', 'orders.customer_id')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('articles', 'order_details.article_id', '=', 'articles.id')
            ->select('customers.id');
    }

    public function Cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function Order()
    {
        return $this->hasMany(Order::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
