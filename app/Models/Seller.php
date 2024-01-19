<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    public static function getTotalSalesAmountFromSeller($sellerId)
    {
        $TotalSalesAmount = OrderDetail::join('articles', 'order_details.article_id', '=', 'articles.id')->where('seller_id', $sellerId)->select('order_details.quantity', 'articles.price')->get()->sum(function ($item) {
            return $item->quantity * $item->price;
        });
        return round($TotalSalesAmount, 2);
    }

    public static function getTotalSalesFromSeller($sellerId)
    {
        $TotalSales = OrderDetail::join('articles', 'order_details.article_id', '=', 'articles.id')->where('seller_id', $sellerId)->select('order_details.quantity')->get()->sum(function ($item) {
            return $item->quantity;
        });
        return $TotalSales;
    }

    public function getSoldArticlesCountForSeller($sellerId)
    {
        $soldArticlesCount = OrderDetail::join('articles', 'order_details.article_id', '=', 'articles.id')
            ->where('articles.seller_id', $sellerId)
            ->select('articles.id', OrderDetail::raw('SUM(order_details.quantity) as total_sold'))
            ->groupBy('articles.id')
            ->pluck('total_sold', 'id');

        return $soldArticlesCount;
    }

    public function Article()
    {
        return $this->hasMany(Article::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
