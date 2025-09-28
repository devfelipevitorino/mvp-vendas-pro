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
        $user = auth()->user();
        $lastProduct = $user->products()->orderBy('id', 'desc')->first();
        $nextId = $lastProduct ? $lastProduct->id + 1 : 1;

        $categories = $user->categories()->orderBy('name')->get();
        $suppliers = $user->suppliers()->orderBy('name')->get();

        return view('products.create', ['nextId' => $nextId, 'categories' => $categories, 'suppliers' => $suppliers]);
    }


    public function store(Request $request)
    {

        $product = new Product();

        $product->reference = $request->reference;
        $product->barcode = $request->barcode;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock;
        $product->add_info = $request->add_info;
        $product->observation = $request->observation;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->supplier_id = $request->supplier_id;


        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('image/products'), $imageName);

            $product->image = $imageName;
        }

        $user = Auth::user();
        $product->user_id = $user->id;

        $product->save();

        return redirect('/');
    }

    public function list()
    {
        $user = auth()->user();
        $products = Product::where('user_id', $user->id)
            ->get();

        return view('products.list', compact('products'));
    }
}
