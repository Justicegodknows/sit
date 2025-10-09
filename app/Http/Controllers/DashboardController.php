<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productcategory;
use App\Models\Productsold;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch the required variables before passing to the view
        $productcategories = Productcategory::all();
        $productsolds = Productsold::all();
        // If you have a Product model, you can fetch products as well
        // $products = Product::all();

        // Pass the fetched variables to the view
        return view('dashboard', compact('productcategories', 'productsolds'));
    }

    public function productcategories()
    {
        $productcategories = Productcategory::all();
        return view('productcategories.index', compact('productcategories'));
    }

    public function productsolds()
    {
        $productsolds = Productsold::all();
        return view('productsolds.index', compact('productsolds'));
    }

    
}
