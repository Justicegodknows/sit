@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comments</h1>
    <a href="{{ route('comment.create') }}" class="btn btn-primary mb-3">Add Comment</a>
    @if($comments->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Content</th>
                    <th>User</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->author }}</td>
                    <td>{{ $comment->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('comment.show', $comment->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('comment.edit', $comment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('comment.destroy', $comment->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this comment?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $comments->links() }}
    @else
        <p>No comments found.</p>
    @endif
</div>
@endsection