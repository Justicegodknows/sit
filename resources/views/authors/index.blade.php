<html>
<head><meta charset="utf-8"><title>Authors</title></head>
<body>  
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Authors
        </h2>
    </x-slot> 

    <x-layouts.content>
        <div class="container">
            <h1>Authors</h1>
            <a href="{{ route('author.create') }}" class="btn btn-primary mb-3">Add New Author</a>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Product Categories</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($authors as $author)
                        <tr>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->email }}</td>
                            <td>
                                @if($author->books->count())
                                    <ul>
                                        @foreach($author->books as $book)
                                            <li>{{ $book->title }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <em>No books</em>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('author.show', $author->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('author.edit', $author->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('author.destroy', $author->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this author?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No authors found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $authors->links() }}     
        </div>
    </x-layouts.content>
</x-layouts.app>
</body>
</html>