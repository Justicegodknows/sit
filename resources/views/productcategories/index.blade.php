<x-site-layout>
    <x-slot:heading>
        Products
    </x-slot:heading>

    <div class="mb-6">
        <x-button href="/productcategories/create" class="btn btn-primary mb-3">Add New Product</x-button>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-6"> 
        @foreach($productcategories as $productcategory)
        <div class="p-4 border rounded-md flex items-center justify-between hover:bg-gray-50">
            <a href="/productcategories/{{ $productcategory->id }}" class="flex-1">
                <h3 class="text-lg font-semibold">{{ $productcategory->name }}</h3>
                <p class="text-gray-600">{{ $productcategory->description }}</p>
                @if($productcategory->author)
                    <p class="text-sm text-gray-500 mt-1">Author: {{ $productcategory->author->first_name }} {{ $productcategory->author->last_name }}</p>
                @else
                    <p class="text-sm text-gray-400 mt-1">No author assigned</p>
                @endif
            </a>
            <form action="{{ route('productcategories.destroy', $productcategory->id) }}" method="POST" class="ml-4" onsubmit="return confirm('Are you sure you want to delete this product category?');">
                @csrf
                @method('DELETE')
                <x-form-button type="submit" class="btn btn-danger">Delete</x-form-button>
                </form>
            </div>
            @endforeach
        </div>
    </x-site-layout>
