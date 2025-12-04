<x-site-layout>
    <div class="flex h-screen fixed inset-0">
    @auth
        <div class="mt-3 space-y-1 px-2 absolute top-0  ">
          <form method="POST" action="/logout">
          @csrf 
          <x-form-button type="submit">Logout</x-form-button>
          </form>
        </div>   
        @endauth
        
        <!-- Sidebar - Fixed at extreme left -->
        <aside class="w-64 bg-gray-800 text-white fixed left-0 top-0 h-full z-50">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-6">Navigation</h2>
                <nav class="space-y-2">
                    <a href="{{ route('productcategories.index') }}" class="block px-4 py-3 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            Product Categories
                        </span>
                    </a>
                    <a href="{{ route('authors.index') }}" class="block px-4 py-3 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Authors
                        </span>
                    </a>
                    <a href="{{ route('users.index') }}" class="block px-4 py-3 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Users
                        </span>
                        
                    </a>
                </nav>
            </div>
        </aside>

        <!-- Main Content - Full screen image -->
        <main class="flex-1 ml-64 w-full h-full overflow-hidden">
            <img src="{{ asset('images/dashboard.PNG') }}" alt="Dashboard" class="w-full h-full object-cover">
        </main>
    </div>
</x-site-layout>
