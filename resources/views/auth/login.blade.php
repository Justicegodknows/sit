<x-site-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <form method="POST" action="/login" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <x-form-error />
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
           <x-form-button>Login</x-form-button>
        </div>
       
    </form>
</x-site-layout>

