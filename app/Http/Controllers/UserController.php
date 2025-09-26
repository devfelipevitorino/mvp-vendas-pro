<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $products = $user->products;

        return view('dashboard', [
            'user' => $user,
            'products' => $products
        ]);
    }
}
