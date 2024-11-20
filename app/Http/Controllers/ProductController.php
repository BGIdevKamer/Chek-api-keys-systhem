<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'price' => 'required',
            ]
        );
        $Product = Product::create($request->all());
        return response()->json($Product, 201);
    }
    public function index()
    {
        return Product::all();
    }
}
