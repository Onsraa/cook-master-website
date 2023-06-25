<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsForSell extends Model
{
    protected $table = 'items_for_sell';

    protected $fillable = [
        'title',
        'description',
        'category',
        'price',
        'discount_percent',
        'stock',
        'image_url',
    ];
}
