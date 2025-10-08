<html>
<head><meta charset="utf-8"><title>Author Details</title></head>
<body> 
    <x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Author Details
        </h2>
    </x-slot>
    <div class="container">
        <h1>Author Details</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $author->name }}</h2>
            <p class="card-text"><strong>Email:</strong> {{ $author->email }}</p>
            <p class="card-text"><strong>Bio:</strong> {{ $author->bio }}</p>
        </div>
    </div>
    <a href="{{ route('authors.index') }}" class="btn btn-secondary mt-3">Back to Authors</a>
</div>
</x-layouts.app>
@section('content')

@endsection
</body>
</html>