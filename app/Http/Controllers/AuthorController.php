<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::with('productcategories')->orderBy('updated_at', 'desc')->paginate(15);
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    }

    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        $author->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
        ]);

        return redirect()->route('authors.index')->with('success', 'Author updated successfully');
    }
    
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfully');
    }
}
   