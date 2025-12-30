<x-site-layout>
    <x-slot:heading>
        Users
    </x-slot:heading>

    <div class="space-y-6">
        @forelse($users as $user)
            <a href="/users/{{ $user->id }}">
                <div class="p-4 border rounded-md">
                    <h3 class="text-lg font-semibold">{{ $user->first_name }} {{ $user->last_name }}</h3>
                    <p class="text-gray-600">{{ $user->email }}</p>
                </div>
            </a>
        @empty
            <p class="text-gray-600">No users found.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $users->links() }}
    </div>
</x-site-layout>