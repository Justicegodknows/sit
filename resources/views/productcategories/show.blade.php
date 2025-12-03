
<x-site-layout>
    <x-slot:heading>
        Product Category Details
    </x-slot:heading>

    <div class="p-4 border rounded-md">
        <h3 class="text-lg font-semibold">{{ $productcategory->name }}</h3>
        <p class="text-gray-600">{{ $productcategory->description }}</p>
    </div>

    <div class="flex items-center gap-x-6">
    <a href="{{ route('productcategories.edit', $productcategory->id) }}" class="btn btn-warning mb-3">Edit</a>
    
   
    <a href="{{ route('productcategories.index') }}" class="btn btn-secondary mb-3">Back to Product Categories</a>
        
    </div>
</x-site-layout>