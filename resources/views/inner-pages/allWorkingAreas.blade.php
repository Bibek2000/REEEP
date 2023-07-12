@extends('layouts.innerpage')

<style>
    .containers {
        width: 100%;
        overflow: hidden; /* Clear float */
    }
    .containers .about-image {
        float: left;
        width: 50%;
        margin: 0 10px 0 0;
    }
    .containers .text {
        text-align: justify;
    }
    .reverse .about-image {
        float: right;
        margin: 0 0 0 10px;
    }
    .reverse .text {
        text-align: justify;
    }
</style>

@section('heading', 'Working Areas')

@section('content')
    @foreach($working_areas as $working_area)
        <div class="containers @if ($loop->index % 2 === 1) reverse @endif mb-5">
            <div class="about-image shadow p-3 mb-3 bg-white rounded">
                <img class="img-fluid" src="{{ $working_area->image }}" alt="###">
            </div>
            <div class="text">
                <h3 class="text-green">{{ $working_area->title }}</h3>
                <p>{!! $working_area->description !!}</p>
            </div>
        </div>
    @endforeach
@endsection
