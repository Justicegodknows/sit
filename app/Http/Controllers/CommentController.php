<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        $users = \App\Models\User::all();
        $products = \App\Models\Productsold::all();
        return view('comments.create', compact('users', 'products'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'required|string|max:1000',
            'user_id' => 'required|exists:users,id',
            'product_id' => 'nullable|exists:productsolds,id',
        ]);
        $comment = Comment::create($request->all());
        return view('comments.store', compact('comment'));
        return redirect()->route('comments.show', $comment->id)->with('success', 'Comment created successfully');
    }


    public function show($id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return view('comments.show', ['message' => 'Comment not found'], 404);
        }
        return view('comments.show', compact('comment'));
    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return redirect()->route('comments.index')->with('error', 'Comment not found');
        }
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return redirect()->route('comments.index')->with('error', 'Comment not found');
        }

        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'required|string|max:1000',
            'user_id' => 'required|exists:users,id',
            
        ]);

        $comment = Comment::create($request->all());
        return view('comments.update', compact('comment'));
        return redirect()->route('comments.index')->with('success', 'Comment updated successfully');
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return redirect()->route('comments.index')->with('error', 'Comment not found');
        }

        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'required|string|max:1000',
            'user_id' => 'required|exists:users,id',
            'product_id' => 'nullable|exists:productsolds,id',
        ]);

        $comment->update($request->all());
        return view('comments.destroy', compact('comment'));
    }

    
}
       
