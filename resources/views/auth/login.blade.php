<x-site-layout>

    <form method="POST" action="{{ route('login.form') }}">
    
        <div><label>Email</label><input type="email" name="email" value="{{ old('email') }}" required></div>
        <div><label>Password</label><input type="password" name="password" required></div>
        <div><label><input type="checkbox" name="remember"> Remember</label></div>
        <div><button type="submit">Login</button></div>
        @if($errors->any())<div>{{ $errors->first() }}</div>@endif
    </form>

</x-site-layout>

