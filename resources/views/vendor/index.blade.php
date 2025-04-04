@extends('layout.app')

@section('vendorIndex')
@php
    $vendor = 'chiill bruh';
@endphp


<div class="profile-wrapper">
    <h2 class="profile-title">Your Profile</h2>

    <div class="profile-section">
        <h3 class="profile-subtitle">Name</h3>
        <p>{{ $vendor }}</p>
    </div>

    <div class="profile-section">
        <h3 class="profile-subtitle">Email</h3>
        <p>{{ $vendor }}</p>
    </div>

    <div class="profile-buttons">
        <a href="" class="btn btn-primary">Edit Profile</a>
        <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete your profile?');">
            @csrf
        
            <button type="submit" class="btn btn-danger">Delete Profile</button>
        </form>
    </div>
</div>
@endsection


<style>
/* Vendor Profile */
.profile-wrapper {
    background-color: #1a1a1a;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    max-width: 800px;
    margin: 0 auto;
}

.profile-title {
    font-size: 2rem;
    color: #e50914; /* Netflix red */
}

.profile-section {
    margin-bottom: 20px;
}

.profile-subtitle {
    font-size: 1.2rem;
    color: #fff;
}

.profile-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.profile-buttons .btn {
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
}

.btn-primary {
    background-color: #e50914; /* Primary color */
    color: #fff;
}

.btn-danger {
    background-color: #ff0000; /* Delete button */
    color: #fff;
}

.profile-edit-wrapper {
    background-color: #1a1a1a;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    max-width: 800px;
    margin: 0 auto;
}

.profile-edit-wrapper h2 {
    font-size: 2rem;
    color: #e50914;
    margin-bottom: 20px;
}

.form-section {
    margin-bottom: 20px;
}

.form-section label {
    font-size: 1rem;
    color: #fff;
    display: block;
    margin-bottom: 5px;
}

.form-section input {
    width: 100%;
    padding: 10px;
    background-color: #333;
    border: 1px solid #444;
    border-radius: 5px;
    color: #fff;
}

button[type="submit"] {
    background-color: #e50914;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    margin-top: 20px;
    cursor: pointer;
    width: 100%;
}

button[type="submit"]:hover {
    background-color: #b20710; /* Darker red */
}

@media (max-width: 768px) {
    .profile-wrapper, .profile-edit-wrapper {
        padding: 10px;
    }

    button[type="submit"] {
        width: 100%;
    }
}


</style>