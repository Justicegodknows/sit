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
            <x-form-input type="text" name="author_id" id="author_id" placeholder="Enter author" required />
        </div>

        <div>
              <x-form-button type="submit">Create Product Category</x-form-button>
              <x-form-button type="button" href='/productcategories'>Cancel</x-form-button>
              
        </div>
    </form>
</x-site-layout>