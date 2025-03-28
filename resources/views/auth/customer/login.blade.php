@extends('welcome')
@section('content')
<div class="auth-container">
    <h2>Customer Login</h2>
    <form action="{{ route('customer.login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <p>New here? <a href="{{ route('customer.register') }}">Sign Up</a></p>
</div>
@endsection