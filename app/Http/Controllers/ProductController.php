<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcome()
    {
        $search = request('search');

        if ($search) {
            $products = Product::where([
                ['name', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $products = Product::all();
        }
        return view('welcome', ['products' => $products, 'search' => $search]);
    }

    public function create()
    {
        $lastId = Product::max('id');       
        $nextId = $lastId ? $lastId + 1 : 1; 

        return view('products.create', ['nextId' => $nextId]);
    }


    public function store(Request $request)
    {

        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('image/products'), $imageName);

            $product->image = $imageName;
        }

        //$user = Auth::user();
        //$product->user_id = $user->id;

        $product->save();

        return redirect('/');
    }
}
