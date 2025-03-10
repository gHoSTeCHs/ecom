<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::with(relations: ['images', 'category'])->get(),
        ]);
        // return response()->json(data: Product::with(relations: ['images', 'category'])->get());
    }

    public function create()
    {
        return view(view: 'admin.products.create');
    }

    public function edit(Product $product)
    {
        return view(view: 'admin.products.edit', data: ['product' => $product->load('images', 'category')]);

        // return response()->json(data: $product->load('images', 'category'));
    }
}
