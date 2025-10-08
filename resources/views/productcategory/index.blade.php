@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Categories</h1>
    <a href="{{ route('productcategory.create') }}" class="btn btn-primary mb-3">Add New Category</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Products Count</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productcategories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->products->count() }}</td>
                    <td>
                        <a href="{{ route('productcategory.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('productcategory.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('productcategory.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No categories found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection