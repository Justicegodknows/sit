<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productcategory;
use App\Models\Author;

class ProductcategoryController extends Controller
{
    public function index()
    {
        $productcategories = Productcategory::with('author')->orderBy('updated_at', 'desc')->paginate(15);
        return view('productcategories.index', compact('productcategories'));
    }

    public function create()
    {
        $authors = Author::orderBy('first_name')->orderBy('last_name')->get();
        $productcategory = new Productcategory();
        $product = $productcategory; // Define $product variable
        return view('productcategories.create', compact('productcategory', 'product', 'authors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:productcategories,name',
            'description' => 'nullable|string',
            'author_id' => 'nullable|exists:authors,id',
        ]);

        $productcategory = Productcategory::create([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'author_id' => $validated['author_id'] ?? null,
        ]);

        return redirect()->route('productcategories.index')->with('success', 'Product category created successfully');
    }

    public function show(Productcategory $productcategory)
    {
        $productcategory->load('author');
        return view('productcategories.show', compact('productcategory'));
    }

    public function edit(Productcategory $productcategory)
    {
        $authors = Author::orderBy('first_name')->orderBy('last_name')->get();
        return view('productcategories.edit', compact('productcategory', 'authors'));
    }

    public function update(Request $request, Productcategory $productcategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:productcategories,name,' . $productcategory->id,
            'description' => 'nullable|string',
            'author_id' => 'nullable|exists:authors,id',
        ]);

        $productcategory->update([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'author_id' => $validated['author_id'] ?? null,
        ]);

        return redirect()->route('productcategories.index')->with('success', 'Product category updated successfully');
    }

    public function destroy(Productcategory $productcategory)
    {
        $productcategory->delete();
        return redirect()->route('productcategories.index')->with('success', 'Product category deleted successfully');
    }
}