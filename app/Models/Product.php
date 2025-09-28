<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Product extends Model
{

    protected $fillable = [
        'reference',
        'barcode',
        'name',
        'price',
        'stock_quantity',
        'add_info',
        'observation',
        'description',
        'image',
        'category_id',
        'supplier_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }
}
