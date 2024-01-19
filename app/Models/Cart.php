<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function CartDetail()
    {
        return $this->hasMany(CartDetail::class);
    }
}
