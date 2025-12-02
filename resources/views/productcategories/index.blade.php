<x-site-layout>
    </h2>
<div class="container"</div>
    <div class="container">
    <x-form-button href="{{ route('productcategories.index') }}" class="btn btn-primary mb-3">Back to Product Categories</x-form-button>
    </div>
    <div class="container">
    <x-form-button href="{{ route('productcategories.create') }}" class="btn btn-primary mb-3">Add New Category</x-form-button>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productcategories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                       
                        <a href="{{ route('productcategories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('productcategories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                        <form action="{{ route('productcategories.destroy', $category->id) }}" method="POST" style="display:inline;">
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

</x-site-layout>