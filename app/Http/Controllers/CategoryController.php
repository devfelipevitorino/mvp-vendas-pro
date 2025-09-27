<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $lastCategory = $user->products()->orderBy('id', 'desc')->first();
        $nextId = $lastCategory ? $lastCategory->id + 1 : 1;

        return view('category.create', ['nextId' => $nextId]);
    }

    public function store(Request $request)
    {
        $category = new Category();
        $user = auth()->user();

        $category->name = $request->name;
        $category->user_id = $user->id;
        $category->save();

        return redirect('/products/create');
    }
}
