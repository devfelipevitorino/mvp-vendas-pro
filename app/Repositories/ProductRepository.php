<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getAll($user)
    {
        return Product::where('user_id', $user->id)->get();
    }
}
