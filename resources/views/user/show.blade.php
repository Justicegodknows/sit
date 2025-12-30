<x-site-layout>
    <x-slot:heading>
        User Details
    </x-slot:heading>

    <div class="p-4 border rounded-md">
        <h3 class="text-lg font-semibold">{{ $user->first_name }} {{ $user->last_name }}</h3>
        <p class="text-gray-600">{{ $user->email }}</p>
    </div>
</x-site-layout>