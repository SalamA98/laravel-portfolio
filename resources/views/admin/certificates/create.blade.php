@extends('layout.admin-dashboard')

@section('title', 'Add Certificate')

@section('content')
<div class="container py-5 card shadow p-4" style="margin-top: 80px;">
    <h2>Add New Certificate</h2>
    <form action="{{ route('certificates.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mt-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
        </div>

        <div class="form-group mt-3">
            <label>Issuer</label>
            <input type="text" name="issuer" class="form-control" required value="{{ old('issuer') }}">
        </div>

        <div class="form-group mt-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" value="{{ old('date') }}">
        </div>

        <div class="form-group mt-3">
            <textarea name="details" id="comment" rows="6" class="form-control"
                placeholder="Write  details about the Certification" ></textarea>
        </div>

        <div class="form-group mt-3">
            <label>Certificate File ()</label>
            <input type="file" name="file" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
</div>
@endsection