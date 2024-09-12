<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function shoppings()
    {
        return $this->belongsToMany(Shopping::class)->withTimestamps()
            ->withPivot('quantity', 'purchase_price', 'sale_price');
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class)->withTimestamps()
            ->withPivot('quantity', 'sale_price', 'discount');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function brad()
    {
        return $this->belongsTo(Brand::class);
    }

    public function presentation()
    {
        return $this->belongsTo(Presentation::class);
    }
}
