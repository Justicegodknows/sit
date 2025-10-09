<x-site-layout>

    <form method="POST" action="{{ route('register.form') }}">
        @csrf
        <div><label>Name</label><input type="text" name="name" value="{{ old('name') }}" required></div>
        <div><label>Email</label><input type="email" name="email" value="{{ old('email') }}" required></div>
        <div><label>Password</label><input type="password" name="password" required></div>
        <div><label>Confirm</label><input type="password" name="password_confirmation" required></div>
        <div><button type="submit">Register</button></div>
        @if($errors->any())<div>{{ $errors->first() }}</div>@endif
    </form>

</x-site-layout>