<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

</head>

<body>
    <div class="auth-container">
        <h2>Admin Login</h2>
        <form action="{{ route('customer.login.post') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        {{-- <p>New here? <a href="{{ route('customer.register') }}">Sign Up</a></p> --}}
        <a href="/">Go back Home</a>
    </div>
</body>

</html>
