@extends('layout.admin-dashboard')

@section('title', 'Edit Project')

@section('content')
<div class="container py-5 card shadow p-4" style="margin-top: 80px;">
    <h2 class="mb-4">Edit Project</h2>

    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $project->title }}">
        </div>

        <div class="form-group mt-3">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{ $project->category }}">
        </div>

        <div class="form-group mt-3">
            <label>Link</label>
            <input type="url" name="link" class="form-control" value="{{ $project->link }}">
        </div>

        <div class="form-group mt-3">
            <label>Description</label>
            <textarea name="description" rows="4" class="form-control">{{ $project->description }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label>Current Image</label><br>
            <img src="{{ asset('storage/' . $project->image) }}" width="120" class="mb-2" alt="">
            <input type="file" name="image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-success mt-4">Update Project</button>
    </form>
</div>
@endsection