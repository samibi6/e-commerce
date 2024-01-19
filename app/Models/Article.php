<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public static function getArticlesByCat($cat)
    {
        $category = Category::where('name', $cat)->first();
        $catID = $category->id;
        $articles = Article::where('category_id', $catID)->get();
        return $articles;
    }

    public static function getArticleByName($name)
    {
        $article = Article::where('name', $name)->first();
        return $article;
    }

    public static function getArticlesBelow($price)
    {
        $articles = Article::where('price', '<', $price)->get();
        return $articles;
    }

    public function Seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function Review()
    {
        return $this->hasMany(Review::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Stock()
    {
        return $this->hasOne(Stock::class);
    }

    public function CartDetail()
    {
        return $this->hasMany(CartDetail::class);
    }

    public function OrderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
