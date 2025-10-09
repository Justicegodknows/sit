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

    <h1>Welcome to the African Beads Store</h1>
    <p>Explore our collection of beautiful African beads.</p>

</x-site-layout>
