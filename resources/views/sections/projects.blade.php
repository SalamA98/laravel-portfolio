@php
    $projects = \App\Models\Project::all();
@endphp
<section class="section" id="projects">
    <div class="container text-center">
        <p class="section-subtitle">My Work</p>
        <h6 class="section-title mb-6">Projects</h6>
        @foreach ($projects as $project)
        <div class="blog-card">
            <img src="{{ asset('storage/' . $project->image) }}"  alt="project image" style="width: 100%; " >
            <div class="blog-card-body">
                <h5 class="blog-card-title">{{ $project->title }}</h6>
                <p class="blog-card-caption"> {{ $project->category }} </p>
                <p><b>{{$project->description}}</b></p>
            </div>
        </div>
        @endforeach
        <!-- end of blog wrapper -->
    </div>
</section>
