@extends('welcome')

@section('content')
<div class="auth-container">
    <h2>Customer Register</h2>
    <form action="{{ route('customer.register.post') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="{{ route('customer.login') }}">Login</a></p>
</div>
@endsection
