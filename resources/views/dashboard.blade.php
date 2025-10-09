<x-site-layout :title="__('Dashboard')">
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
                <p class="mt-2 text-gray-600">Welcome back! Here's an overview of your African Beads management system.</p>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
                <!-- Authors Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Authors</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ \App\Models\Author::count() }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-5 py-3">
                        <div class="text-sm">
                            <a href="{{ route('authors.index') }}" class="font-medium text-blue-600 hover:text-blue-500">View all authors</a>
                        </div>
                    </div>
                </div>

                <!-- Comments Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Comments</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ \App\Models\Comment::count() }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-5 py-3">
                        <div class="text-sm">
                            <a href="{{ route('comments.index') }}" class="font-medium text-green-600 hover:text-green-500">View all comments</a>
                        </div>
                    </div>
                </div>

                <!-- Product Categories Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Categories</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ \App\Models\Productcategory::count() }}</dd>
                                    
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-5 py-3">
                        <div class="text-sm">
                            <a href="{{ route ('productcategories.index') }}" class="font-medium text-purple-600 hover:text-purple-500">View all categories</a>
                        </div>
                    </div>
                </div>

                <!-- Products Sold Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Products Sold</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ \App\Models\Productsold::count() }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-5 py-3">
                        <div class="text-sm">
                            <a href="{{ route('productsolds.index') }}" class="font-medium text-yellow-600 hover:text-yellow-500">View all products</a>
                        </div>
                    </div>
                </div>

                <!-- Users Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Users</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ \App\Models\User::count() }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-5 py-3">
                        <div class="text-sm">
                            <a href="{{ route('users.index') }}" class="font-medium text-red-600 hover:text-red-500">View all users</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Section -->
            <div class="bg-white shadow rounded-lg mb-8">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Quick Actions</h3>
                    <p class="mt-1 text-sm text-gray-500">Manage your African Beads system efficiently</p>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Authors Actions -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Authors</h4>
                            <div class="space-y-2">
                                <a href="{{ route('authors.index') }}" class="block w-full text-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                    View All Authors
                                </a>
                                <a href="{{ route('authors.create') }}" class="block w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                                    Add New Author
                                </a>
                            </div>
                        </div>

                        <!-- Comments Actions -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Comments</h4>
                            <div class="space-y-2">
                                <a href="{{ route('comments.index') }}" class="block w-full text-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                    View All Comments
                                </a>
                                <a href="{{ route('comments.create') }}" class="block w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700">
                                    Add New Comment
                                </a>
                            </div>
                        </div>

                        <!-- Product Categories Actions -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Categories</h4>
                            <div class="space-y-2">
                                <a href="{{ route ('productcategories.index') }}" class="block w-full text-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                    View All Categories
                                </a>
                                <a href="{{ route ('productcategories.create') }}" class="block w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700">
                                    Add New Category
                                </a>
                            </div>
                        </div>

                        <!-- Products Sold Actions -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Products Sold</h4>
                            <div class="space-y-2">
                                <a href="{{ route('productsolds.index') }}" class="block w-full text-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                    View All Products
                                </a>
                                <a href="{{ route('productsolds.create') }}" class="block w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-700">
                                    Add New Product
                                </a>
                            </div>
                        </div>

                        <!-- Users Actions -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Users</h4>
                            <div class="space-y-2">
                                <a href="{{ route('users.index') }}" class="block w-full text-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                    View All Users
                                </a>
                                <a href="{{ route('users.create') }}" class="block w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700">
                                    Add New User
                                </a>
                                
                        
                            </div>
                        </div>

                        <!-- System Actions -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">System</h4>
                            <div class="space-y-2">
                                <a href="{{ route('welcome') }}" class="block w-full text-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                    Home Page
                                </a>
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    <button type="submit" class="block w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="bg-white shadow rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">System Overview</h3>
                    <p class="mt-1 text-sm text-gray-500">Your African Beads management system at a glance</p>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Data Summary</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex justify-between">
                                    <span>Total Authors:</span>
                                    <span class="font-medium">{{ \App\Models\Author::count() }}</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Total Comments:</span>
                                    <span class="font-medium">{{ \App\Models\Comment::count() }}</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Product Categories:</span>
                                    <span class="font-medium">{{ \App\Models\Productcategory::count() }}</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Products Sold:</span>
                                    <span class="font-medium">{{ \App\Models\Productsold::count() }}</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Registered Users:</span>
                                    <span class="font-medium">{{ \App\Models\User::count() }}</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Quick Stats</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                                    <span class="text-sm font-medium text-blue-900">Most Active Model</span>
                                    <span class="text-sm text-blue-700">
                                        @php
                                            $counts = [
                                                'Authors' => \App\Models\Author::count(),
                                                'Comments' => \App\Models\Comment::count(),
                                                'Categories' => \App\Models\Productcategory::count(),
                                                'Products' => \App\Models\Productsold::count(),
                                                'Users' => \App\Models\User::count()
                                            ];
                                            $maxModel = array_keys($counts, max($counts))[0];
                                        @endphp
                                        {{ $maxModel }} ({{ max($counts) }})
                                    </span>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                                    <span class="text-sm font-medium text-green-900">System Status</span>
                                    <span class="text-sm text-green-700">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-site-layout>
