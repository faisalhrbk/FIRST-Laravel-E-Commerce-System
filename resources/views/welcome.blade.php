<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to E-Commerce</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0a0a0a;
            color: white;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #3e0044;
        }
        .nav-menu {
            list-style: none;
            display: flex;
            gap: 1rem;
        }
        .nav-menu a {
            text-decoration: none;
            color: white;
            padding: 0.5rem;
            transition: 0.3s;
        }
        .nav-menu a:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }
        .nav-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            background: none;
            border: none;
            color: white;
        }
        .hero {
            text-align: center;
            padding: 5rem 2rem;
            background: #b20710;
            color: white;
        }
        .hero a {
            display: inline-block;
            margin: 1rem;
            padding: 0.75rem 1.5rem;
            background: white;
            color: #b20710;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .hero a:hover {
            background: #e50914;
            color: white;
        }
        .footer {
            text-align: center;
            padding: 2rem;
            background: #0a0a0a;
        }
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 10px;
                background: #b20710;
                padding: 1rem;
                border-radius: 5px;
            }
            .nav-menu.show {
                display: flex;
            }
            .nav-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">E-Shop</div>
        <button class="nav-toggle" onclick="toggleMenu()">☰</button>
        <ul class="nav-menu">
             <li><a href="#">Login</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Cart</a></li>
        </ul>
    </nav>
    
    <header class="hero">
        <h1>Welcome to My E-Commerce App</h1>
        <p>Discover amazing products and shop with ease.</p>
        <a href="#">Vendor SignUp</a>
        <a href="#">Customer SignUp</a>
    </header>
    
    <footer class="footer">
        <p>Contact Info: <a href="#">GitHub</a></p>
        <p><a href="#">Privacy Policy</a></p>
        <p><a href="#">Terms & Conditions</a></p>
    </footer>
    
    <script>
        function toggleMenu() {
            document.querySelector('.nav-menu').classList.toggle('show');
        }
        document.addEventListener("DOMContentLoaded", function() {
            const navToggle = document.querySelector(".nav-toggle");
            const navMenu = document.querySelector(".nav-menu");

            navToggle.addEventListener("click", function() {
                navMenu.classList.toggle("active");
            });
        });
 
    </script>
</body>
</html>
