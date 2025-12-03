<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productcategory;

class ProductcategoryController extends Controller
{
    public function index()
    {
        $productcategories = Productcategory::limit(10)->get();
        return view('productcategories.index', compact('productcategories'));
    }

    public function create()
    {
        // Create a new empty productcategory instance for the form
        $productcategory = new Productcategory();
        $product = $productcategory; // Define $product variable
        return view('productcategories.create', compact('productcategory', 'product'));
    }

    public function store()
    {
        
        return redirect()->route('productcategories.index')->with('success', 'Product category created successfully');
    }

    public function show(Productcategory $productcategory)
    {
        return view('productcategories.show', compact('productcategory'));
    }
}