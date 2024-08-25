<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'coordinate',
        'm2',
        'flatOrHouse',
    ];

    public function getCoordinates($value)
    {
        return json_decode($value, true);
    }
}
