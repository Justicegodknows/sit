<x-site-layout>
    <form method="POST" action="{{ route('productcategories.store') }}" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <x-form-label for="name">Product Name:</x-form-label>
            <x-form-input type="text" name="name" id="name" placeholder="Enter name" required />
        </div>

        <div class="mb-4">
            <x-form-label for="description">Product Description:</x-form-label>       
            <x-form-input type="text" name="description" id="description" placeholder="Enter description" required />
        </div>

        <div class="mb-4">
            <x-form-label for="author_id">Author:</x-form-label>
            <select name="author_id" id="author_id" class="w-full border border-gray-300 p-2 rounded">
                <option value="">Select an author (optional)</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
                @endforeach
            </select>
        </div>

        <div>
              <x-form-button type="submit">Create Product Category</x-form-button>
              <x-form-button type="button" href='/productcategories'>Cancel</x-form-button>
              
        </div>
    </form>
</x-site-layout>