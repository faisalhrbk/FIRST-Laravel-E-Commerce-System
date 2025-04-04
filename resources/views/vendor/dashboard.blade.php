@extends('layout.app')

@section('title', 'Vendor Dashboard')

@section('vendorDashboard')
    <div class="dashboard-wrapper">

        <div class="dashboard-header">

            <h2 style="color: #fff;">Welcome, 👋</h2>
            <a href="{{route('vendor.index')}}" class="btn-profile">
                My Profile
            </a>
        </div>

        <div class="card">
            <h3>Add New Product</h3>
            {{-- {{ route('vendor.products.store') }} --}}
            <form action="#" method="POST" style="display: grid; gap: 1rem;">
                @csrf
                <div>
                    <label for="title">Product Title:</label>
                    <input type="text" name="title" placeholder="enter product title" required>
                </div>
                <div>
                    <label for="images">Product Images:</label>
                    <input type="file" name="images" placeholder="images">
                </div>
                <div>
                    <label for="price">Product Price:</label>
                    <input type="number" name="price" placeholder="enter price" type="image" required>
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea name="description" placeholder="enter description" rows="3"></textarea>
                </div>
                <button type="submit">Add Product</button>
            </form>
        </div>

        <div class="card-list">
            <h3>Your Products</h3>
            <div class="product-grid">
                {{-- @forelse ($products as $product)
                    <div class="card">
                        <img class="vendorImage" src="#" alt="image here">
                        <h4>{{ $product->title }}</h4>
                        <p><strong>Price:</strong> ${{ $product->price }}</p>
                        <p>{{ $product->description }}</p>

                    </div>
                @empty
                    <p style="color: #aaa;">No products added yet.</p>
                @endforelse --}}
            </div>
        </div>

    </div>
@endsection

@push('styles')
    <style>
        .dashboard-wrapper {
            padding: 2rem;
            width: 70vh;
            max-width: 800px;
            margin: auto;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .card {
            margin-top: 2rem;
            background: #1f1f1f;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            margin-bottom: 1rem;
        }

        .product-grid {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }

        .vendorImage {
            height: 100px;
            width: 200px;
        }

        .card-list {
            margin-top: 2rem;
        }

        .card-list h3 {
            margin-bottom: 1rem;
        }

        input,
        textarea {
            width: 100%;
            padding: 0.6rem;
            border: none;
            border-radius: 8px;
            background: #2c2c2c;
            color: #fff;
        }

        input:focus,
        textarea:focus {
            outline: 2px solid #e50914;
        }

        button {
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 8px;
            background: #e50914;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #b0060f;
        }

        .btn-profile {
            background: transparent;
            color: #e50914;
            border: 2px solid #e50914;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .btn-profile:hover {
            background: #e50914;
            color: #fff;
        }
    </style>
@endpush
