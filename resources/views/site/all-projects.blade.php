@extends('site.layout')

@section('content')
    <section class="projects pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach ($projects as $index => $project)
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="project-card">
                            <div class="image-project">
                                <img src="{{ asset('storage/' . json_decode($project->images)[0]) }}" class="w-100" style="height:300px;">
                            </div>
                            <div class="text-light project-title">
                                <a class="text-import" href="{{ route('projectDetail.show', $project->id) }}"><button
                                    type="button" class="btn-project fs-3" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2" data-project-id="{{ $project->id }}"
                                    data-project-title="{{ json_decode($project->title)->{app()->getLocale()} }}"
                                    data-project-description="{{ json_decode($project->description)->{app()->getLocale()} }}"
                                    data-project-images="{{ $project->images }}">
                                    {{ json_decode($project->title)->{app()->getLocale()} }}
                                    </button>
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
