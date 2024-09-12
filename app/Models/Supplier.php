<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function shoppings()
    {
        return $this->hasMany(Shopping::class);
    }
}
