@extends('layout.admin-dashboard')


@section('title', 'Edit About Me')

@section('content')
    <div class="container py-5">
        <div class="card shadow p-4">
            <h2 class="mb-4 text-center">About Me Section</h2>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Subtitle --}}
                <div class="form-group">
                    <label>Section Subtitle</label>
                    <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" value="{{ old('subtitle', $about->subtitle) }}">
                    @error('subtitle')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Title --}}
                <div class="form-group">
                    <label>Section Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $about->title) }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Description --}}
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{ old('description', $about->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Current Image --}}
                @if($about->image)
                    <div class="form-group">
                        <label>Current Image</label><br>
                        <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" style="max-width: 200px" class="mb-3">
                    </div>
                @endif

                {{-- Upload New Image --}}
                <div class="form-group">
                    <label>Upload New Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>

                {{-- Upload New CV --}}
                <div class="form-group mt-3">
                    <label>Upload CV (PDF)</label>
                    <input type="file" name="cv" class="form-control-file">
                </div>

                {{-- Submit --}}
                <div class="form-group text-center mt-4">
                    <button type="submit" class="btn-rounded btn btn-outline-primary mt-4">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection