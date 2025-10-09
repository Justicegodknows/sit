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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f8fafc;
            color: #222;
        }
        header {
            background: #000000;
            color: #fff;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 1.5rem;
            font-weight: 500;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        footer {
            background: #000000;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>

    <main class="mx-auto max-w-3xl p-4">
        {{ $slot }}
    </main>

    <footer class="mx-auto max-w-5xl p-4 text-sm bg-blue-700 text-white">
        &copy; {{ date('Y') }} Beautiful African Beads. All rights reserved.
    </footer>
</body>
</html>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->