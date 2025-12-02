<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productcategory;


class DashboardController extends Controller
{
    public function index()
    {
        $productcategories = Productcategory::all();
        return view('dashboard', compact('productcategories'));
    }

    
}
