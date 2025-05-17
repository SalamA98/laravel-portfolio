@extends('layout.adminapp')
@section('title', 'All Projects')
@section('content')
<section id="home" class="header">
<div class="container py-5">
    <h2 class="mb-4">All Projects</h2>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Add New Project</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped" style="table-layout: fixed;">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->category }}</td>
                <td><img src="{{ asset('storage/' . $project->image) }}" width="100" alt=""></td>
                <td><a href="{{ $project->link }}" target="_blank">Visit</a></td>
                <td>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination justify-content-center" style="margin:5px 0"> {{ $projects->links() }}</div>
</div>
</section>
@endsection