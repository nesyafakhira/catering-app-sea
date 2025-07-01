<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'plan',
        'meal_types',
        'delivery_days',
        'allergies',
        'total_price'
    ];
}
