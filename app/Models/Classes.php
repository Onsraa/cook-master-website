<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title','description', 'image_url', 'difficulty', 'price', 'validated', 'certificate_id', 'product_id', 'price_id', 'creator_id'
    ];
}
