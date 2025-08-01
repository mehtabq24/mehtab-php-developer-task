<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
