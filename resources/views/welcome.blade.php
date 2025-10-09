<x-site-layout>

    @if(auth()->check())
        <p>Welcome, {{ auth()->user()->name }}!</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <p><a href="{{ route('login.form') }}">Login</a> | <a href="{{ route('register.form') }}">Register</a></p>
    @endif

    <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 2.5rem; color: #8B4513; letter-spacing: 2px; text-shadow: 1px 1px 2px #e0c097;">Welcome to the <span style="color: #d2691e;">African Beads Store</span></h1>
    <p style="font-size: 1.25rem; color: #333; max-width: 600px; margin: 1.5rem auto;">
        Explore our collection of <span style="font-weight: bold; color: #b8860b;">beautiful African beads</span>.<br>
        <span style="font-style: italic; color: #a0522d;">Discover unique designs, vibrant colors, and authentic craftsmanship.</span>
    </p>
    <ul style="list-style-type: disc; margin-left: 2rem; color: #5a3a1b;">
        <li><span style="font-weight: bold;">Handmade</span> bead jewelry</li>
        <li><span style="font-weight: bold;">Traditional</span> and <span style="font-weight: bold;">modern</span> styles</li>
        <li>Worldwide shipping available</li>
    </ul>

</x-site-layout>
