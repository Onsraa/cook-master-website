<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentals extends Model
{
    use HasFactory;

    protected $fillable = ['products', 'start_time', 'end_time', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}