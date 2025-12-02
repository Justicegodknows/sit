<x-site-layout>
<form method="POST" action="/productcategories/{{ $productcategory->id }}" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf
        @method('PATCH')

        <p class="mb-6 text-gray-600">Fill out the form below to edit the product category.</p>

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter name" required value="{{ $productcategory->name }}">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea name="description" id="description" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter description" rows="5" required>{{ $productcategory->description }}</textarea>
        </div>
        <div class="flex items-center gap-x-6">
            <x-form-button>Update Product Category</x-form-button>
            <button type="button"href='/productcategories/{{ $productcategory->id }}'" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 ml-2">Cancel</button>
        </div>
    </form>
</x-site-layout>