<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return view()->json(['message' => 'Author not found'], 404);
        }
        return view('authors.show', compact('author'));
    }

    public function store(Request $request)
    {
        $author = Author::create($request->all());
        return view('authors.store', compact('author'));
    }
    
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return view('authors.update', ['message' => 'Author not found'], 404);
        }
        $author->update($request->all());
        return view('authors.update', compact('author'));
    }
    
    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return view('authors.destroy', ['message' => 'Author not found'], 404);
        }
        $author->delete();
        return view('authors.destroy', ['message' => 'Author deleted']);
    }
    
}
   