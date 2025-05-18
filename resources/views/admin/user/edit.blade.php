@extends('layout.admin-dashboard')

@section('title', 'Edit Profile')

@section('content')
<div class="container py-5 card shadow p-4" style="margin-top: 80px;">
    <h3 class="mb-4">Change Password</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('user.update') }}">
        @csrf

        {{-- Current Password --}}
        <div class="form-group mt-3">
            <label for="current_password">Current Password</label>
            <input type="password" class="form-control" name="current_password" required>
            @error('current_password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- New Password --}}
        <div class="form-group mt-3">
            <label for="password">New Password</label>
            <input type="password" class="form-control" name="password" required>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Confirm New Password --}}
        <div class="form-group mt-3">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" class="form-control" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Update Password</button>
    </form>
</div>
</div>
@endsection

