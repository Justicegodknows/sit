<x-site-layout>

{{-- 
    If the server is reading this page as a raw PHP file and not as HTML, it usually means that the server is not processing the Blade templates correctly. This can happen if:

    1. The web server (like Apache or Nginx) is not configured to handle PHP files, or PHP is not installed/enabled.
    2. The file is being accessed directly (e.g., via file:// or by opening it in a browser), instead of through the Laravel application's routing (http://yourdomain.com/route).
    3. The .blade.php file is not being rendered by a Laravel controller/view, but is being served as a static file.
    4. There is a misconfiguration in your virtual host or web server setup, causing it to serve .php files as plain text.


    To fix:
    - Make sure you are accessing the page via a Laravel route/controller, not directly.
    - Ensure your web server is configured to process PHP files.
    - Do not open .blade.php files directly in the browser.
    - Check your server's PHP installation and configuration.
--}}

@section('content')
<div class="container">
    <h1>Product Categories</h1>
    <a href="{{ route('productcategories.create') }}" class="btn btn-primary mb-3">Add New Category</a>
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
                    <td>{{ optional($category->products)->count() ?? 0 }}</td>
                    <td>
                        <a href="{{ route('productcategories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('productcategories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
@endsection
</x-site-layout>