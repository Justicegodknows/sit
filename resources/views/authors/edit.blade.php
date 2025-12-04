<x-site-layout>
    <x-slot:heading>
        Edit Author
    </x-slot:heading>

    <form method="POST" action="{{ route('authors.update', $author->id) }}" class="max-w-md mx-auto bg-white p-6 rounded shadow">
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

        <p class="mb-6 text-gray-600">Fill out the form below to edit the author.</p>

        <div class="mb-4">
            <label for="first_name" class="block text-gray-700 font-bold mb-2">First Name:</label>
            <input type="text" name="first_name" id="first_name" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter first name" required value="{{ $author->first_name }}">
        </div>

        <div class="mb-4">
            <label for="last_name" class="block text-gray-700 font-bold mb-2">Last Name:</label>
            <input type="text" name="last_name" id="last_name" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter last name" required value="{{ $author->last_name }}">
        </div>

        <div class="flex items-center gap-x-6">
            <x-form-button>Update Author</x-form-button>
            <a href="{{ route('authors.show', $author->id) }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 ml-2">Cancel</a>
        </div>
    </form>
</x-site-layout>

