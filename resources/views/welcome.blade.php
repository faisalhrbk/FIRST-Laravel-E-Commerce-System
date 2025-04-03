<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to E-Commerce</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

</head>

<body>
    @include('partials.navbar')
    @yield('hero')

    @yield('login')
    @yield('register')

    @include('partials.footer')

</body>

</html>
