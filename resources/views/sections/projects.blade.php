@php
    $projects = \App\Models\Project::all();
@endphp
<section class="section" id="projects">
    <div class="container text-center">
        <p class="section-subtitle">My Work</p>
        <h6 class="section-title mb-6">Projects</h6>
        @foreach ($projects as $project)
        <div class="blog-card">



            {{--<div col-md-4 class="display: flex;">
            <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid rounded-start"  alt="project image" ></div>--}}
            <div class="blog-card-body">
                 @if($project->link)
                <h5 class="blog-card-title"><a href="{{ $project->link }}">{{ $project->title }}</a></h5>
                @else
                <h5 class="blog-card-title">{{ $project->title }}</a></h5>
                @endif
                <p class="blog-card-caption"> {{ $project->category }} </p>
                <p><b>{{$project->description}}</b></p>
            </div>
        </div>
        @endforeach
        <!-- end of blog wrapper -->
    </div>
</section>
