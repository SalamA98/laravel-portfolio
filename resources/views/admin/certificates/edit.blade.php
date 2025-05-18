@extends('layout.admin-dashboard')


@section('title', 'Edit Certificate')

@section('content')

<section id="home" class="header">
    <div class="container py-5 card shadow p-4" style="margin-top: 80px;"> 
        <h2>Edit Certificate</h2>
        <form action="{{ route('certificates.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mt-3">
                <label>Title</label>
                <input type="te xt" name="title" class="form-control" required value="{{ old('title', $certificate->title) }}">
            </div>

            <div class="form-group mt-3">
                <label>Issuer</label>
                <input type="text" name="issuer" class="form-control" required value="{{ old('issuer', $certificate->issuer) }}">
            </div>

            <div class="form-group mt-3">
                <label>Date</label>
                <input type="date" name="date" class="form-control" value="{{ old('date', $certificate->date ? $certificate->date->format('Y-m-d') : '') }}">
            </div>

            <div class="form-group mt-3">
                <label>Current File</label><br>
                <a href="{{ Storage::url($certificate->file) }}" target="_blank">Download Current File</a>
            </div>

            <div class="form-group mt-3">
                <label>Upload New Certificate File </label>
                <input type="file" name="file" class="form-control">
                <small class="form-text text-muted">yo can leave it if you want to keep the old one </small>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</section>
@endsection