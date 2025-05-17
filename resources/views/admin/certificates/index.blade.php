@extends('layout.admin-dashboard')

@section('title', 'Certificates List')

@section('content')
<section id="home" class="header">
    <div class="container"> 
    <h2 class="section-title">Certificates</h2><br>

    <a href="{{ route('certificates.create') }}" class="btn btn-rounded btn-primary mb-3">Add New Certificate</a>

    @if($certificates->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Issuer</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($certificates as $certificate)
            <tr>
                <td>{{ $certificate->title }}</td>
                <td>{{ $certificate->issuer }}</td>
                <td>{{ $certificate->date ? $certificate->date->format('Y-m-d') : '-' }}</td>
                <td>
                    <a href="{{ route('certificates.show', $certificate->id) }}" class="btn  btn-success btn-sm">View</a>
                    <a href="{{ route('certificates.edit', $certificate->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('certificates.destroy', $certificate->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this certificate?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No certificates found.</p>
    @endif
    </div>
</section>
@endsection