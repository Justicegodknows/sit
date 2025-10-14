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
        $productcategories = \App\Models\Productcategory::all();
        $productsolds = \App\Models\Productsold::all();
        return view('comments.create', compact('productcategories', 'productsolds'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
            'content' => 'required|string|max:1000|min:10',
            'productsolds_id' => 'required|exists:productsolds,id',
            'productcategories_id' => 'required|exists:productcategories,id',
        ]);
        
        $comment = Comment::create([
            'user_id' => auth()->id(),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'productsolds_id' => $request->input('productsolds_id'),
            'productcategories_id' => $request->input('productcategories_id'),
        ]);
        
        return redirect()->route('comments.index')->with('success', 'Comment created successfully');
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
        
        $productcategories = \App\Models\Productcategory::all();
        $productsolds = \App\Models\Productsold::all();
        
        return view('comments.edit', compact('comment', 'productcategories', 'productsolds'));
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return redirect()->route('comments.index')->with('error', 'Comment not found');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
            'content' => 'required|string|max:1000|min:10',
            'productsolds_id' => 'required|exists:productsolds,id',
            'productcategories_id' => 'required|exists:productcategories,id',
        ]);

        $comment->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'productsolds_id' => $request->input('productsolds_id'),
            'productcategories_id' => $request->input('productcategories_id'),
        ]);

        return redirect()->route('comments.index')->with('success', 'Comment updated successfully');
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return redirect()->route('comments.index')->with('error', 'Comment not found');
        }
        
        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Comment deleted successfully');
    }

    
}
       
