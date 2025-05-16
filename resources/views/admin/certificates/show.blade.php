@extends('layout.adminapp')

@section('title', 'Certificate Details')

@section('content')
<section id="home" class="header">
    <div class="container"> 
        <h2 class="section-title">Certificate Details</h2>

        <p><strong>Title:</strong> {{ $certificate->title }}</p>
        <p><strong>Issuer:</strong> {{ $certificate->issuer }}</p>
        <p><strong>Date:</strong> {{ $certificate->date ? $certificate->date->format('Y-m-d') : '-' }}</p> 
        <p><strong>File:</strong> <a href="{{ Storage::url($certificate->file) }}" target="_blank">Download Certificate</a></p>
        <div class="image-container">
            <img src="{{ asset('storage/' . $certificate->file) }}" style="max-width: 25%; height: auto;" alt="Certificate" >
        </div>
         <a href="{{ route('certificates.index') }}" class="btn btn-primary btn-rounded  mt-4 ml-4">Back to list</a>
    </div>
</section>
@endsection