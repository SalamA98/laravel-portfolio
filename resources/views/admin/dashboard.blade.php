@extends('layout.admin-dashboard')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Welcome to Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow p-3">
                <h4>Total Projects</h4>
                <p>{{ $projectCount }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow p-3">
                <h4>Total Messages</h4>
                <p>{{ $messageCount }}</p>
            </div>
        </div>
    </div>
    <div class="row mt-4">   
        <div class="col-md-6">
            <div class="card shadow p-3">
                <h4>Total Certificates</h4>
                <p>{{ $certificateCount }}</p>
            </div>
        </div>
    </div>
</div>
@endsection