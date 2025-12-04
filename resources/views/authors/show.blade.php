<x-site-layout>

    <x-slot:heading>
        Author Details
    </x-slot:heading>

    <div class="p-4 border rounded-md">
        <h3 class="text-lg font-semibold">{{ $author->first_name }} {{ $author->last_name }}</h3>
        @if($author->productcategories->count())
            <p class="text-sm text-gray-500 mt-1">Product Categories: {{ $author->productcategories->count() }}</p>
        @else
            <p class="text-sm text-gray-400 mt-1">No product categories</p>
        @endif
    </div>

    <div class="flex items-center gap-x-6">
    <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning mb-3">Edit</a>
    
   
    <a href="{{ route('authors.index') }}" class="btn btn-secondary mb-3">Back to Authors</a>
        
    </div>

</x-site-layout>

