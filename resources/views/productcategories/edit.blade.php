<x-site-layout>
    <x-slot:heading>
        Edit Product Category
    </x-slot:heading>

    <form method="POST" action="{{ route('productcategories.update', $productcategory->id) }}" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <p class="mb-6 text-gray-600">Fill out the form below to edit the product category.</p>

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter name" required value="{{ $productcategory->name }}">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea name="description" id="description" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter description" rows="5" required>{{ $productcategory->description }}</textarea>
        </div>

        <div class="mb-4">
            <label for="author_id" class="block text-gray-700 font-bold mb-2">Author:</label>
            <select name="author_id" id="author_id" class="w-full border border-gray-300 p-2 rounded">
                <option value="">Select an author (optional)</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $productcategory->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->first_name }} {{ $author->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center gap-x-6">
            <x-form-button>Update Product Category</x-form-button>
            <a href="{{ route('productcategories.show', $productcategory->id) }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 ml-2">Cancel</a>
        </div>
    </form>
</x-site-layout>