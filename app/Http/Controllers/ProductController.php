<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', ['products' => Product::withTrashed()->get()]);
    }

    public function create()
    {
        return view('create_product');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect('/products/'.$product->slug);
    }

    public function show(Product $product)
    {
        return view('product', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('edit_product', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());
        $product->save();
        return redirect('/products/'.$product->slug);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }

    public function restore(Product $product){

        $product->restore();
        return redirect('/products/'.$product->slug);
    }
}
