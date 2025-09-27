<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $casts = [
        'category' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
