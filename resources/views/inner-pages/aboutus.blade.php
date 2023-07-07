@extends('layouts.innerpage')

    @section('heading','About')
@section('content')
    <style>
        .container{
            width: 100%;
            overflow: hidden;
        }
        .container .about-image{
            float: left;
            width: 50%;
            margin: 0 10px 0 0;
        }
        .text{
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
    @foreach($aboutData['records'] as $aboutDatas)
        <div class="container @if ($loop->index % 2 === 1) reverse @endif">
            <div class="about-image shadow p-3 mb-5 bg-white rounded">
                <img class="img-fluid" src="{{ $aboutDatas->image }}" alt="###">
            </div>
                <div class="text">
                    <h3 class="text-green">{{ $aboutDatas->title[App::getLocale()] }}</h3>
                    <p>{!! $aboutDatas->description[App::getLocale()] !!}</p>
                </div>
        </div>
    @endforeach
@endsection

