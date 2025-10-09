<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productsold;


class ProductsoldController extends Controller
{
    public function index()
    {
        $productsolds = Productsold::all();
        return view('productsolds.index', compact('productsolds'));
    }

    public function show($id)
    {
        $productsold = Productsold::find($id);
        if (!$productsold) {
            return view('productsolds.show', ['message' => 'Product not found'], 404);
        }
        return view('productsolds.show', compact('productsold'));
    }

    public function store(Request $request)
    {
        $productsold = Productsold::create($request->all());
        return view('productsolds.store', compact('productsold'));
    }

    public function update(Request $request, $id)
    {
        $productsold = Productsold::find($id);
        if (!$productsold) {
            return view('productsolds.update', ['message' => 'Product not found'], 404);
        }
        $productsold->update($request->all());
        return view('productsolds.update', compact('productsold'));
    }

    public function destroy($id)
    {
        $productsold = Productsold::find($id);
        if (!$productsold) {
            return view('productsolds.destroy', ['message' => 'Product not found'], 404);
        }
        $productsold->delete();
        return view('productsolds.destroy', ['message' => 'Product deleted']);
    }
}
