@php
    $about = \App\Models\AboutMe::first();
@endphp

@if($about)
<!-- about section -->
<section class="section pt-0" id="about">
    <div class="container text-center">
        <div class="about">
            <div class="about-img-holder">
                @if($about->image)
                    <img src="{{ asset('storage/' . $about->image) }}" class="about-img" alt="About Image">
                @else
                    <img src="{{ asset('imgs/me.png') }}" class="about-img" alt="Default Image">
                @endif
            </div>
            <div class="about-caption">
                <p class="section-subtitle">{{ $about->subtitle }}</p>
                <h2 class="section-title mb-3">{{ $about->title }}</h2>
                <p>{{ $about->description }}</p>
                @if($about->cv)
                    <a href="{{ Storage::url($about->cv) }}" target="_blank" class="btn-rounded btn btn-outline-primary mt-4">
                        📄 Download CV
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
@endif
<!-- end of about section -->
