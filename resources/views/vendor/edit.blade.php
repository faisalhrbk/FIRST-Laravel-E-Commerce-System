@extends('layout.app')

@section('vendorEdit')
<div class="profile-edit-wrapper">
    <h2>Edit Your Profile</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="" method="POST">
        @csrf
     

        <div class="form-section">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="null rn" required>
        </div>

        <div class="form-section">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="null rn" required>
        </div>

        <div class="form-section">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <small>Leave empty if you don't want to change the password.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
