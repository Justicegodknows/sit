<x-site-layout>
    <x-slot:heading>
        Product Categories
    </x-slot:heading>

    <div class="mb-6">
        <x-button href="/productcategories/create" class="btn btn-primary mb-3">Add New Category</x-button>
    </div>

    <div class="space-y-6"> 
        @foreach($productcategories as $productcategory)
        <a href="/productcategories/{{ $productcategory->id }}">
            <div class="p-4 border rounded-md">
                <h3 class="text-lg font-semibold">{{ $productcategory->name }}</h3>
                <p class="text-gray-600">{{ $productcategory->description }}</p>
            </div>
        </a>
        @endforeach
        
    </div>
</x-site-layout>
