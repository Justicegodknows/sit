<x-site-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Authors
        </h2>
    </x-slot> 

    {{-- 
        The cause of the HTTP ERROR 500 is likely due to mixing raw HTML structure (<html>, <head>, <body>) with Blade layout components (<x-layouts.app> and @section('content')).
        In Blade, when using a layout (like <x-layouts.app> or @extends), you should NOT include <html>, <head>, or <body> tags in your view.
        Instead, let the layout handle the HTML structure, and only define the content sections here.
        FIX: Remove the <html>, <head>, and <body> tags from this file.
    --}}

    @section('content')
        <div class="container">
            <h1>Authors</h1>
            <a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Add New Author</a>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back to Authors</a>
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
                                @if($author->productcategories->count())
                                    <ul>
                                        @foreach($author->productcategories as $productcategory)
                                            <li>{{ $productcategory->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <em>No product categories</em>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('authors.show', $author->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
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
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back to Authors</a>
            
    
        </div>
    @endsection
</x-site-layout>