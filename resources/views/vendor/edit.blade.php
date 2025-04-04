@extends('layout.app')

@section('vendorEdit')
<div class="profile-edit-wrapper">
    <h2>Edit Profile</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-section">
            <label for="business_name">Title</label>
            <input type="text" id="business_name" name="business_name" value="{{ }}" required>
        </div>

        <div class="form-section">
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>

        <div class="form-section">
            <label for="price">Price</label>
            <input type="text" id="price" name="price" value="{{ }}" required>
        </div>

        <div class="form-section">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection


<style>
    /* Profile Edit Page */
.profile-edit-wrapper {
    background-color: #1a1a1a; /* Dark background similar to Netflix */
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    max-width: 800px;
    margin: 0 auto;
}

.profile-edit-wrapper h2 {
    font-size: 2rem;
    color: #e50914; /* Netflix red */
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

.form-section input,
.form-section textarea {
    width: 100%;
    padding: 10px;
    background-color: #333;
    border: 1px solid #444;
    border-radius: 5px;
    color: #fff;
}

.form-section textarea {
    height: 150px;
    resize: none;
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
    .profile-edit-wrapper {
        padding: 10px;
    }

    .form-section {
        margin-bottom: 15px;
    }

    button[type="submit"] {
        width: 100%;
    }
}

</style>