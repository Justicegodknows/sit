<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>African Beads</title>

    <!-- Tailwind CSS via CDN for quick dev use -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col">
    <header class="bg-blue-500 border-b">
        <div class="mx-auto max-w-3xl p-4 text-2xl font-bold">
          Beautiful African Beads
            
        </div>
        <div>
          <a href="/Productcategory" class="text-lg font-semibold hover:underline">Product Category</a>
        </div>
        
            
          

    </header>

    <main class="mx-auto max-w-3xl p-4">
        {{ $slot }}
    </main>

    <footer class="mx-auto max-w-5xl p-4 text-sm bg-blue-700 text-white">
        &copy; {{ date('Y') }} Beautiful African Beads. All rights reserved.
    </footer>
</body>
</html>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->