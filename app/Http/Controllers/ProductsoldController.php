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

    public function create()
    {
        $productcategories = \App\Models\Productcategory::all();
        $authors = \App\Models\Author::all();
        $customers = \App\Models\User::all();
        return view('productsolds.create', compact('productcategories', 'authors', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'sold_at' => 'required|date',
            'customer_id' => 'required|exists:users,id',
            'author_id' => 'required|exists:authors,id',
            'productcategories_id' => 'required|exists:productcategories,id',
        ]);

        $productsold = Productsold::create($request->all());
        return redirect()->route('productsolds.index')->with('success', 'Product sold created successfully');
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
