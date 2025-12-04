<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Website</title>
        <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    @yield('content')

  
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          
         
            <div class="ml-10 flex items-baseline space-x-4">
             
              <x-nav-link type="a" href="/" :active="request()->is('/')"> Home</x-nav-link>
              @auth
              <x-nav-link type="a" href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
              <x-nav-link type="a" href="/productcategories" :active="request()->is('productcategories')">Product Category</x-nav-link>
              @endauth
              <x-nav-link type="a" href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
              
            </div>
       
        </div>
        
         <div class="mt-3 space-y-1 px-2">
          <x-nav-link href="a" href="/register">Register</x-nav-link>
          <x-nav-link href="a" href="/login">Login</x-nav-link>
        </div>
        
        @auth
        <div class="mt-3 space-y-1 px-2">
          <form method="POST" action="/logout">
          @csrf 
          <x-form-button type="submit">Logout</x-form-button>
          </form>
        </div>   
        @endauth
        </div>
   
  </nav>
  <main>
    <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:items-center sm:justify-between">
      @isset($heading)
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
    
      @endisset
    </div>
  </header>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 sm:justify-between lg:px-8">
      
        {{$slot}}
      
    </div>
  </main>
</div>

<footer class="bg-gray-800 text-white py-4">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <p class="text-center">&copy; {{ date('Y') }} {{('African Beads') }}. All rights reserved.</p>
  </div>
</footer>
</body>
</html>