<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productsold;


class ProductsoldController extends Controller
{
    public function index()
    {
        $productsolds = Productsold::all();
        return response()->json($productsolds);
    }

    public function show($id)
    {
        $productsold = Productsold::find($id);
        if (!$productsold) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($productsold);
    }

    public function store(Request $request)
    {
        $productsold = Productsold::create($request->all());
        return response()->json($productsold, 201);
    }

    public function update(Request $request, $id)
    {
        $productsold = Productsold::find($id);
        if (!$productsold) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $productsold->update($request->all());
        return response()->json($productsold);
    }

    public function destroy($id)
    {
        $productsold = Productsold::find($id);
        if (!$productsold) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $productsold->delete();
        return response()->json(['message' => 'Product deleted']);
    }
}
