<x-site-layout>
    <x-slot:heading>
        Authors
    </x-slot:heading>

    <div class="mb-6">
        <x-button href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Add New Author</x-button>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-6"> 
        @foreach($authors as $author)
        <div class="p-4 border rounded-md flex items-center justify-between hover:bg-gray-50">
            <a href="/authors/{{ $author->id }}" class="flex-1">
                <h3 class="text-lg font-semibold">{{ $author->first_name }} {{ $author->last_name }}</h3>
                @if($author->productcategories->count())
                    <p class="text-sm text-gray-500 mt-1">Product Categories: {{ $author->productcategories->count() }}</p>
                @else
                    <p class="text-sm text-gray-400 mt-1">No product categories</p>
                @endif
            </a>
            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="ml-4" onsubmit="return confirm('Are you sure you want to delete this author?');">
                @csrf
                @method('DELETE')
                <x-form-button type="submit" class="btn btn-danger">Delete</x-form-button>
            </form>
        </div>
        @endforeach
        
    </div>

    <div class="mt-6">
        {{ $authors->links() }}
    </div>
</x-site-layout>