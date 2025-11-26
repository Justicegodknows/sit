<x-site-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <form method="POST" action="/register" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <x-form-error />
        </div>

        <div class="mb-4">
            <x-form-label for="first_name">First Name:</x-form-label>
            <x-form-input type="text" name="first_name" id="first_name" placeholder="Enter your first name" required />
        </div>

        <div class="mb-4">
            <x-form-label for="last_name">Last Name:</x-form-label>       
            <x-form-input type="text" name="last_name" id="last_name" placeholder="Enter your last name" required />
        </div>

        <div class="mb-4">
            <x-form-label for="email">Email:</x-form-label>       
            <x-form-input type="email" name="email" id="email" placeholder="Enter your email" required />
        </div>

        <div class="mb-4">
            <x-form-label for="password">Password:</x-form-label>
            <x-form-input type="password" name="password" id="password" placeholder="Enter your password" required />
        </div>


        <div>
            <a href="/dashboard" class="inline-block mr-4 text-gray-600 hover:text-gray-800">Cancel</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</button>
        </div>
    </form>
</x-site-layout>