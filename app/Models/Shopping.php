<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;

    public function Supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps()
            ->withPivot('quantity', 'purchase_price', 'sale_price');
    }
}
