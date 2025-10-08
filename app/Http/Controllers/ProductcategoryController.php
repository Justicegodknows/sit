<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productcategory;

class ProductcategoryController extends Controller
{
    public function index()
    {
        $productcategories = Productcategory::all();
        return response()->json($productcategories);
    }

    public function show($id)
    {
        $productcategory = Productcategory::find($id);
        if (!$productcategory) {
            return response()->json(['message' => 'Product category not found'], 404);
        }
        return response()->json($productcategory);
    }

    public function store(Request $request)
    {
        $productcategory = Productcategory::create($request->all());
        return response()->json($productcategory, 201);
    }

    public function update(Request $request, $id)
    {
        $productcategory = Productcategory::find($id);
        if (!$productcategory) {
            return response()->json(['message' => 'Product category not found'], 404);
        }
        $productcategory->update($request->all());
        return response()->json($productcategory);
    }

    public function destroy($id)
    {
        $productcategory = Productcategory::find($id);
        if (!$productcategory) {
            return response()->json(['message' => 'Product category not found'], 404);
        }
        $productcategory->delete();
        return response()->json(['message' => 'Product category deleted']);
    }
}
