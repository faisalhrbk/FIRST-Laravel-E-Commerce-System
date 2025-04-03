@extends('layout.app')

@section('login')
    <div class="loginForm">

        <div class="auth-container">
            @if (session('success'))
                <p style="color:green">{{ session('success') }}</p>
            @endif
            <h2>{{ $role }} Login</h2>

            <form action="{{ route('role.login.post', ['role' => $role]) }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p>New here? <a href="{{ route('register', ['role' => $role]) }}">Sign Up</a></p>
        </div>
    </div>
@endsection
