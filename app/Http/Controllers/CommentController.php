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

    public function show($id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return view('comments.show', ['message' => 'Comment not found'], 404);
        }
        return view('comments.show', compact('comment'));
    }

    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        return view('comments.store', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return view('comments.update', ['message' => 'Comment not found'], 404);
        }
        $comment->update($request->all());
        return view('comments.update', compact('comment'));
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
                return view('comment.destroy', ['message' => 'Comment not found'], 404);
        }
        $comment->delete();
        return view('comment.destroy', ['message' => 'Comment deleted']);
    }
}
