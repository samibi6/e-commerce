<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    public function Cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function Article()
    {
        return $this->belongsTo(Article::class);
    }
}
