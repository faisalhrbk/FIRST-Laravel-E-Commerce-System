@extends('layout.app')

@section('vendorIndex')
<div class="profile-wrapper">
    <h2 class="profile-title">Your Profile</h2>

    <div class="profile-section">
        <h3 class="profile-subtitle">Title</h3>
        <p>{{ }}</p>
    </div>

    <div class="profile-section">
        <h3 class="profile-subtitle">Image</h3>
        <img src="{{ }}" alt="Vendor Image" class="profile-image">
    </div>

    <div class="profile-section">
        <h3 class="profile-subtitle">Price</h3>
        <p>{{ }}</p>
    </div>

    <div class="profile-section">
        <h3 class="profile-subtitle">Description</h3>
        <p>{{ }}</p>
    </div>

    <div class="profile-buttons">
        <a href="{{ }}" class="btn btn-primary">Edit Profile</a>
        <form action="{{ }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Account</button>
        </form>
    </div>
</div>
@endsection


<style>
    /* Profile Show Page */
.profile-wrapper {
    background-color: #1a1a1a; /* Dark background similar to Netflix */
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

.profile-image {
    width: 100%;
    max-width: 200px;
    border-radius: 10px;
    margin-top: 10px;
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

@media (max-width: 768px) {
    .profile-wrapper {
        padding: 10px;
    }

    .profile-image {
        max-width: 150px;
    }

    .profile-buttons {
        flex-direction: column;
        align-items: center;
    }

    .profile-buttons .btn {
        width: 100%;
        margin-bottom: 10px;
    }
}

</style>