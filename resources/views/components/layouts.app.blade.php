<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel Project') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f8fafc;
            color: #222;
        }
        header {
            background: #1a202c;
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
            background: #1a202c;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <strong>{{ config('app.name', 'Laravel Project') }}</strong>
        </div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('logout') }}">Logout</a>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel Project') }}. All rights reserved.
    </footer>
</body>
</html>