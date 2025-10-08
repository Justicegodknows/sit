<x-site-layout>
<html>
<head><meta charset="utf-8"><title>Login</title></head>
<body>
    <form method="POST" action="{{ route('login') }}">
    
        <div><label>Email</label><input type="email" name="email" value="{{ old('email') }}" required></div>
        <div><label>Password</label><input type="password" name="password" required></div>
        <div><label><input type="checkbox" name="remember"> Remember</label></div>
        <div><button type="submit">Login</button></div>
        @if($errors->any())<div>{{ $errors->first() }}</div>@endif
    </form>
</body>
</html>
</x-site-layout>