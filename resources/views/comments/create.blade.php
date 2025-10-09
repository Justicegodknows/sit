<x-site-layout>
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h1 class="text-2xl font-bold text-gray-900">Create New Comment</h1>
                    <p class="mt-1 text-sm text-gray-500">Add a new comment to the system</p>
                </div>
                
                <div class="p-6">
                    <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                        
                        
                            

                            <!-- Comment Title -->
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input id="title" 
                                       name="title" 
                                       type="text" 
                                       value="{{ old('title') }}"
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('title') border-red-500 @enderror" 
                                       placeholder="Enter comment title">
                                @error('title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Comment Content -->
                            <div>
                                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                                <textarea id="content" 
                                          name="content" 
                                          rows="6" 
                                        
                                          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('content') border-red-500 @enderror" 
                                          placeholder="Enter your comment content">{{ old('content') }}</textarea>
                                <p class="mt-1 text-xs text-gray-500">Maximum 1000 characters</p>
                                @error('content')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            

                        @if($errors->any())
                            <div class="mt-6 rounded-md bg-red-50 p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-red-800">
                                            There was an error with your submission
                                        </h3>
                                        <div class="mt-2 text-sm text-red-700">
                                            <ul class="list-disc pl-5 space-y-1">
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="mt-6 flex items-center justify-between">
                            <a href="{{ route('comments.index') }}" 
                               class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Cancel
                            </a>
                            
                            <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Create Comment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-site-layout>
