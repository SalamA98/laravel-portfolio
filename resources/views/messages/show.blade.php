@extends('layout.adminapp')

@section('title','Messages' . ' - ' . $message->name)

@section('content')
        <section class="section" >
            <div class="container text-center">
                <h6 class="section-title mb-6">  </h6>
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">{{$message->content}}</p>
                            <h6 class="testimonial-card-title">{{$message->name}}</h6>
                        </div>
                    </div>
            </div> <!-- end of container -->
        </section>
@endsection