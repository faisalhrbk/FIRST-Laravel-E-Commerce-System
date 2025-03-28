@extends('welcome')
@section('content')
<div class="auth-container">
    <h2>Vendor Register</h2>
    <form action="{{ route('vendor.register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="{{ route('vendor.login') }}">Login</a></p>
</div>
@endsection

