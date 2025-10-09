<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productcategory;

class ProductcategoryController extends Controller
{
    public function index()
    {
        $productcategories = Productcategory::all();
        return view('productcategories.index', compact('productcategories'));
    }

    public function create()
    {
        // Create a new empty productcategory instance for the form
        $productcategory = new Productcategory();
        $product = $productcategory; // Define $product variable
        return view('productcategories.show', compact('productcategory', 'product'));
    }

    public function show($id)
    {
        $productcategory = Productcategory::find($id);
        if (!$productcategory) {
            return view()->json(['message' => 'Product category not found'], 404);
        }
        $product = $productcategory; // Define $product variable
        return view('productcategories.show', compact('productcategory', 'product'));
    }

    public function store(Request $request)
    {
        $productcategory = Productcategory::create($request->all());
        return view('productcategories.store', compact('productcategory'));
    }

    public function update(Request $request, $id)
    {
        $productcategory = Productcategory::find($id);
        if (!$productcategory) {
            return view('productcategories.update', ['message' => 'Product category not found'], 404);
        }
        $productcategory->update($request->all());
        return view('productcategories.update', compact('productcategory'));
    }

    public function destroy($id)
    {
        $productcategory = Productcategory::find($id);
        if (!$productcategory) {
            return view('productcategories.destroy', ['message' => 'Product category not found'], 404);
        }
        $productcategory->delete();
        return view('productcategories.destroy', ['message' => 'Product category deleted']);
    }
}
