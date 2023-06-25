<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookingLesson extends Model
{
    protected $table = 'cooking_lessons';

    protected $fillable = [
        'title',
        'description',
        'chef',
        'category',
        'level',
        'image_url',
    ];
}
