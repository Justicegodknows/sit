<x-site-layout>
    <x-slot:heading>
        Create Author
    </x-slot:heading>
    
    
    

    <form method="POST" action="/authors" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf

        <p class="mb-6 text-gray-600">Fill out the form below to create a new author.</p>

        <div class="mb-4">
            <x-form-label for="name">Name:</x-form-label>
            <x-form-input type="text" name="name" id="name" placeholder="Enter name" required />
        </div>

        <div class="mb-4">
            <x-form-label for="email">Email:</x-form-label>       
            <x-form-input type="text" name="email" id="email" placeholder="Enter email" required />
        </div>

        <div class="mb-4">
            <x-form-label for="description">Product Categories:</x-form-label>
            <x-form-input as="textarea" name="product_categories" id="product_categories" placeholder="Enter product categories" rows="5" required />
        </div>

        <div>
              <x-form-button>Save</x-form-button>
        </div>
    </form>                         
</x-site-layout>