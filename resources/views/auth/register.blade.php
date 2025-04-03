@extends('welcome')
@section('register')
    <div class="auth-container">
        <h2>Vendor Register</h2>
        <form action="{{ route('register.post' . ['role' => $role]) }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="{{ route('login', ['role' => $role]) }}">Login</a></p>
    </div>
@endsection
