@extends('site.layout')

@section('content')
    <section class="projects pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach ($projects as $index => $project)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="project-card me-4">
                            <div class="image-project">
                                <img src="{{ asset('storage/' . json_decode($project->images)[0]) }}"">
                            </div>
                            <div class="text-light project-title">
                                <a class="text-import" href="{{ route('projectDetail.show', $project->id) }}">
                                    {{ json_decode($project->title)->{app()->getLocale()} }}
                                </a>
                                <p>{{ json_decode($project->classification)->{app()->getLocale()} }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
