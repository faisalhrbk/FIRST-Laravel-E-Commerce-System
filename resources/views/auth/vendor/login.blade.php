@extends('welcome')

@section('content')
<div class="auth-container">
    <h2>Vendor Login</h2>
    <form action="{{ route('vendor.login.post') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <p>New here? <a href="{{ route('vendor.register') }}">Sign Up</a></p>
</div>
@endsection
