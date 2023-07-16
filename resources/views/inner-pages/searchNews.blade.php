@extends('layouts.innerpage')

<style>
    .container {
        width: 100%;
        overflow: hidden; /* Clear float */
    }
    .container .about-image {
        float: left;
        width: 50%;
        margin: 0 10px 0 0;
    }
    .container .text {
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

@section('heading', 'News and Events')

@section('content')
        <div class="container reverse mb-5">
            <div class="about-image shadow p-3 mb-5 bg-white rounded">
                <img class="img-fluid" src="{{ $newsData->image }}" alt="###">
            </div>
            <div class="text">
                <h3 class="text-green">{{ $newsData->title }}</h3>
                <p>{!! $newsData->description !!}</p>
            </div>
        </div>
@endsection
