@php
    $certificates = \App\Models\Certificate::all();
@endphp

@if($certificates->count())
<!-- certificates section -->
<section class="section" id="certificates">
    <div class="container text-center">
        <p class="section-subtitle">My Achievements</p>
        <h6 class="section-title mb-6">Certificates</h6>

        <!-- row -->
        <div class="row">
            @foreach($certificates as $certificate)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="testimonial-card p-3 h-100">
                        <div class="testimonial-card-body">
                            <h5 class="mb-2">{{ $certificate->title }}</h5>
                            <p><strong>Issuer:</strong> {{ $certificate->issuer }}</p>
                            @if($certificate->date)
                                <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($certificate->date)->format('F Y') }}</p>
                            @endif
                            @if($certificate->file)
                                <a href="{{ Storage::url($certificate->file) }}" target="_blank" class="btn btn-sm btn-outline-primary mt-2">
                                    📄 Download Certificate
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- end of row -->
    </div> <!-- end of container -->
</section>
@endif
<!-- end of certificates section -->