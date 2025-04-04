@extends('layouts.app')

@section('title', 'Vendor Dashboard')

@section('content')
<div class="dashboard-wrapper" style="padding: 2rem; max-width: 1200px; margin: auto;">

    <div class="dashboard-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
        <h2 style="color: #fff;">Welcome, {{ Auth::user()->name }} 👋</h2>
        <a href="{{ route('vendor.profile.edit') }}" class="btn-profile">
            My Profile
        </a>
    </div>

    <div class="card" style="margin-top: 2rem;">
        <h3 style="margin-bottom: 1rem;">Add New Product</h3>
        <form action="{{ route('vendor.products.store') }}" method="POST" style="display: grid; gap: 1rem;">
            @csrf
            <div>
                <label for="name">Product Name:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="price">Price:</label>
                <input type="number" name="price" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea name="description" rows="3"></textarea>
            </div>
            <button type="submit">Add Product</button>
        </form>
    </div>

    <div class="card-list" style="margin-top: 2rem;">
        <h3 style="margin-bottom: 1rem;">Your Products</h3>
        <div class="product-grid" style="display: grid; gap: 1rem; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
            @forelse ($products as $product)
                <div class="card">
                    <h4>{{ $product->name }}</h4>
                    <p><strong>Price:</strong> ${{ $product->price }}</p>
                    <p>{{ $product->description }}</p>
                </div>
            @empty
                <p style="color: #aaa;">No products added yet.</p>
            @endforelse
        </div>
    </div>

</div>
@endsection

@push('styles')
<style>
    .dashboard-wrapper {
        padding: 2rem;
        max-width: 1200px;
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
        background: #1f1f1f;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .product-grid {
        display: grid;
        gap: 1rem;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }

    input, textarea {
        width: 100%;
        padding: 0.6rem;
        border: none;
        border-radius: 8px;
        background: #2c2c2c;
        color: #fff;
    }

    input:focus, textarea:focus {
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



