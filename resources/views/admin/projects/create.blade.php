@extends('layout.adminapp')

@section('title', 'Create Project')

@section('content')

<div class="container py-5 card shadow p-4" style="margin-top: 120px;"  >
    <h2 >Add New Project</h2>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label>Category</label>
            <input type="text" name="category" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label>Link</label>
            <input type="url" name="link" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label>Description</label>
            <textarea name="description" rows="4" class="form-control"></textarea>
        </div>

        <div class="form-group mt-3">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Save Project</button>
    </form>
</div>
@endsection