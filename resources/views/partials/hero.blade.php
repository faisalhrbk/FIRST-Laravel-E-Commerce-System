@extends('layout.app')
@section('hero')
    <div class="hero">
        <h1>Start Your Journey</h1>
        <p>Join as a Vendor or Customer and explore the best shopping experience.</p>
        <div class="buttons">
            <a href="{{ route('login', ['role' => 'vendor']) }}">Start as Vendor</a>
            <a href="{{ route('login', ['role' => 'customer']) }}">Start as Customer</a>

        </div>
           @include('partials.products')
        
    </div>
 
@endsection

<style>
    .hero {
        height: fit-content;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
        background-size: cover;
        background-position: center;
        text-align: center;
        color: white;
        padding: 20px;
    }

    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }

    .hero .buttons {
        display: flex;
        gap: 20px;
    }

    .hero a {
        text-decoration: none;
        color: white;
        background: red;
        padding: 15px 30px;
        font-size: 1.2rem;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .hero a:hover {
        background: darkred;
    }
</style>
