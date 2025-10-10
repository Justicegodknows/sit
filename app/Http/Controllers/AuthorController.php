<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\User;

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

    public function create()
    {
        $users = \App\Models\User::all();
        return view('authors.create', compact('users'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email',
            'user_id' => 'required|exists:users,id',
        ]);

        $author = Author::create($request->all());
        return redirect()->route('authors.index')->with('success', 'Author created successfully');
    }
    
    public function edit(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return view('authors.update', ['message' => 'Author not found'], 404);
        }
        $author->update($request->all());
        return view('authors.update', compact('author'));
    }
    
    public function delete($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return view('authors.destroy', ['message' => 'Author not found'], 404);
        }
        $author->delete();
        return view('authors.destroy', ['message' => 'Author deleted']);
    }
    
}
   