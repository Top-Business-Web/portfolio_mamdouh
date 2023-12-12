@extends('site.layout')

@section('content')
    <!-- details project -->
    <div class="details-project pt-5 pb-5">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="main-slider" style="direction: ltr;">
                        @php
                            $images = json_decode($project->images, true);
                        @endphp
                        @foreach ($images as $h_image)
                            <div class="school-img">
                                <img class="img-fluid" src="{{ asset('storage/' . $h_image) }}" alt="No Image" />
                            </div>
                        @endforeach
                    </div>
                    <div class="small-slider" style="direction: ltr;">
                        @if (!empty($project->images))
                            @foreach (json_decode($project->images, true) as $image)
                                <img class="img-fluid" src="{{ asset('storage/' . $image) }}" alt="No Image" />
                            @endforeach
                        @else
                            <p>No images available</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div>
                        <h3 class="fw-bold mb-4 mt-3 text-white">{{ json_decode($project->title)->{app()->getLocale()} }}
                        </h3>
                        <p class="lh-lg text-white">{!! json_decode($project->description)->{app()->getLocale()} !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
