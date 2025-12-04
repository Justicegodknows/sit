
<x-site-layout>
    <x-slot:heading>
        Product Category Details
    </x-slot:heading>

    <div class="p-4 border rounded-md">
        <h3 class="text-lg font-semibold">{{ $productcategory->name }}</h3>
        <p class="text-gray-600">{{ $productcategory->description }}</p>
        @if($productcategory->author)
            <p class="text-gray-600 mt-2">
                <strong>Author:</strong> 
                <a href="{{ route('authors.show', $productcategory->author->id) }}" class="text-blue-600 hover:underline">
                    {{ $productcategory->author->first_name }} {{ $productcategory->author->last_name }}
                </a>
            </p>
        @else
            <p class="text-gray-400 mt-2"><strong>Author:</strong> No author assigned</p>
        @endif
    </div>

    <div class="flex items-center gap-x-6">
    <x-button href="{{ route('productcategories.edit', $productcategory->id) }}" class="btn btn-warning mb-3">Edit</x-button>
    
   
    <x-button href="{{ route('productcategories.index') }}" class="btn btn-secondary mb-3">Back to Products</x-button>
        
    </div>
</x-site-layout>