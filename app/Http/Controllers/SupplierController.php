<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $lastSupplier = $user->suppliers()->orderBy('id', 'desc')->first();
        $nextId = $lastSupplier ? $lastSupplier->id + 1 : 1;

        return view('supplier.create', ['nextId' => $nextId]);
    }

    public function store(Request $request)
    {
        $supplier = new Supplier();
        $user = auth()->user();

        $supplier->name = $request->name;
        $supplier->user_id = $user->id;
        $supplier->save();

        return redirect('/dashboard');
    }

    public function list()
    {
        $user = auth()->user();

        $suppliers = Supplier::where('user_id', $user->id)->get();

        return view('supplier.list', compact('suppliers'));
    }
}
