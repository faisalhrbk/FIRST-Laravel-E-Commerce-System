 <nav class="navbar">
     <div class="navbar-brand"><a href="/">E-Shop</a></div>
     <button class="nav-toggle" onclick="toggleMenu()">☰</button>
     <ul class="nav-menu">
         <li><a href="{{ route('login', ['role' => 'admin']) }}">Admin Login</a></li>
         <li><a href="/">Home</a></li>
         <li><a href="#">Products</a></li>
         <li><a href="#">Categories</a></li>
         <li><a href="#">Cart</a></li>
     </ul>
 </nav>
