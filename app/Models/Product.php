<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Product extends Model
{

    protected $casts = [
        'category' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }
}
