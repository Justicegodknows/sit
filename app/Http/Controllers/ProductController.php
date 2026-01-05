<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Author;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('author')->orderBy('updated_at', 'desc')->paginate(15);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $authors = Author::orderBy('first_name')->orderBy('last_name')->get();
        $product = new Product();
        $product = $product; // Define $product variable
        return view('products.create', compact('product', 'authors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            'description' => 'nullable|string',
            'author_id' => 'nullable|exists:authors,id',
        ]);

        $product = Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'author_id' => $validated['author_id'] ?? null,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function show(Product $product)
    {
        $product->load('author');
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $authors = Author::orderBy('first_name')->orderBy('last_name')->get();
        return view('products.edit', compact('product', 'authors'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:products,name,' . $product->id,
            'description' => 'nullable|string',
            'author_id' => 'nullable|exists:authors,id',
        ]);

            $product->update([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'author_id' => $validated['author_id'] ?? null,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}