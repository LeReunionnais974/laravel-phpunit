<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Product::class, 'product');
    }

    public function index()
    {
        return view('products.index', [
            'products' => Product::paginate(5),
        ]);
    }

    public function create()
    {
        return view('products.create-product');
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());

        return redirect()->route('products.show', ['product' => $product->id]);
    }

    public function show(Product $product)
    {
        return view('products.show-product', [
            'product' => $product,
        ]);
    }

    public function edit(Product $product)
    {
        return view('products.edit-product', [
            'product' => $product,
        ]);
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.show', ['product' => $product->id]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
