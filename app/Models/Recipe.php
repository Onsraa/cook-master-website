<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'instructions',
        'preparation_time',
        'cooking_time',
        'difficulty_level',
        'cuisine_type',
        'meal_type',
        'dietary_restrictions',
        'calories',
        'image_url',
    ];

}
