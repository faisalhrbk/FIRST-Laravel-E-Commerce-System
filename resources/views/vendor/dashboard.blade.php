{{-- @extends('welcome') --}}
<style>
/* Global Styles */
body {
    background-color: #141414;
    color: white;
    font-family: Arial, sans-serif;
}

/* Dashboard Layout */
.dashboard-container {
    display: flex;
    min-height: 100vh;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background: black;
    padding: 20px;
}

.sidebar h2 {
    color: red;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px 0;
}

.sidebar ul li a:hover {
    color: red;
}

/* Main Content */
.main-content {
    flex: 1;
    padding: 20px;
}

/* Stats Section */
.stats {
    display: flex;
    gap: 15px;
}

.stat-card {
    background: #222;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
    flex: 1;
}

/* Form Styling */
form {
    background: #222;
    padding: 15px;
    border-radius: 8px;
}

input, textarea, button {
    display: block;
    width: 100%;
    margin-top: 5px;
    padding: 8px;
    background: #333;
    border: none;
    color: white;
}

button {
    background: red;
    cursor: pointer;
}

/* Responsive Design */
@media (max-width: 768px) {
    .dashboard-container {
        flex-direction: column;
    }
    
    .stats {
        flex-direction: column;
    }
    
    .sidebar {
        width: 100%;
        text-align: center;
    }
}
</style>

{{-- 
@section('content') --}}
<div class="dashboard-container">
    
    <!-- 🔹 Sidebar Navigation -->
    <aside class="sidebar">
        <h2>Vendor Panel</h2>
        <ul>
            <li><a href="#">🏠 Dashboard</a></li>
            <li><a href="#">📦 My Products</a></li>
            <li><a href="#">📜 Orders</a></li>
            <li><a href="#">💰 Earnings</a></li>
            <li><a href="#">⚙️ Settings</a></li>
        </ul>
    </aside>

    <!-- 🔹 Main Content -->
    <main class="main-content">
        <!-- Vendor Stats -->
        <section class="stats">
            <div class="stat-card">
                <h3>📦 Total Products</h3>
                {{-- <p>{{ $products->count() }}</p> --}}
            </div>
            <div class="stat-card">
                <h3>💰 Total Earnings</h3>
                <p>$5000</p>
            </div>
            <div class="stat-card">
                <h3>🛒 Orders Received</h3>
                {{-- <p>{{ $orders->count() }}</p> --}}
            </div>
        </section>

        <!-- 🔹 Add Product Form -->
        <section class="add-product">
            <h2>Add New Product</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <label>Product Name</label>
                <input type="text" name="name" required>

                <label>Price</label>
                <input type="number" name="price" required>

                <label>Description</label>
                <textarea name="description" rows="3" required></textarea>

                <label>Product Image</label>
                <input type="file" name="image" required>

                <button type="submit">Add Product</button>
            </form>
        </section>

        <!-- 🔹 Orders -->
        {{-- <section class="orders">
            <h2>Recent Orders</h2>
            @if ($orders->count() > 0)
                <ul>
                    @foreach ($orders as $order)
                        <li>
                            Order #{{ $order->id }} - {{ $order->status }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No orders yet.</p>
            @endif
        </section> --}}
    </main>

</div>
{{-- @endsection --}}
