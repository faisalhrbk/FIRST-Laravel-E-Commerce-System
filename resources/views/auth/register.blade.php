@extends('layout.app')
@section('register')
    <div class="registerForm">
        <div class="auth-container">
             @if (session('error'))
                <p style="color:rgb(253, 1, 1)">{{ session('error') }}</p>
            @endif
            <h2>Vendor Register</h2>
            <form action="{{ route('role.register.post', ['role' => $role]) }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="{{ route('login', ['role' => $role]) }}">Login</a></p>
        </div>
    </div>
@endsection
