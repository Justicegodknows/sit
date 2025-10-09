<x-site-layout>
@section('content')
<div class="container">
    <h1>Comment Details</h1>

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Comment by: {{ $comments->user->name ?? 'Anonymous' }}</h5>
            <h5 class="card-title">Comment by: {{ $comments->user->name ?? 'Anonymous' }}</h5>
            <p class="card-text">{{ $comments->content }}</p>
            <p class="card-text">{{ $comments->author }}</p>
            <p class="card-text">
                <small class="text-muted">Posted on {{ $comments->created_at->format('M d, Y H:i') }}</small>
            </p>
        </div>
    </div>

    <a href="{{ route('comments.index') }}" class="btn btn-secondary">Back to Comments</a>
    @can('update', $comment)
        <a href="{{ route('comments.edit', $comment) }}" class="btn btn-primary">Edit</a>
    @endcan
    @can('delete', $comment)
        <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
                onclick="return confirm('Are you sure you want to delete this comment?')">Delete</button>
        </form>
    @endcan
</div>
@endsection
</x-site-layout>