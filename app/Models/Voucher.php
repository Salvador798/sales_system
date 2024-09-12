<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    public function shoppings()
    {
        return $this->hasMany(Shopping::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
