@extends('layout.admin-dashboard')

@section('title', 'Admin Login')

@section('content')
<div class="container py-5 card shadow p-4" style="margin-top: 120px;">
    <h2 class="text-center mb-4">Admin Login</h2>

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>

        <div class="form-group mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

    </form> 
</div>
@endsection