@extends('welcome')

@section('login')
    <div class="auth-container">
        <h2>{{ $role }} Login</h2>
        <form action="{{ route($role . '.login.post') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>New here? <a href="{{ route($role . ' .register') }}">Sign Up</a></p>
    </div>
@endsection
