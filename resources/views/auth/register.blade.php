<x-site-layout>
<html>
<head><meta charset="utf-8"><title>Register</title></head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div><label>Name</label><input type="text" name="name" value="{{ old('name') }}" required></div>
        <div><label>Email</label><input type="email" name="email" value="{{ old('email') }}" required></div>
        <div><label>Password</label><input type="password" name="password" required></div>
        <div><label>Confirm</label><input type="password" name="password_confirmation" required></div>
        <div><button type="submit">Register</button></div>
        @if($errors->any())<div>{{ $errors->first() }}</div>@endif
    </form>
</body>
</html>
</x-site-layout>