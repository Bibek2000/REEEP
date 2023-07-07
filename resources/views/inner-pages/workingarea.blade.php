@extends('layouts.innerpage')

<style>
    .containers{
        width: 100%;
    }
    .abouts-image{
        float: left;
        width: 50%;
        margin: 0 10px 0 0;
    }
    .text{
        text-align: justify;

    }
</style>
@section('heading','Working Areas')
@section('content')
    <div class="containers">
        <img class="img-fluid abouts-image" src="{{ $working_area->image }}" alt="###">
        <div class="text">
            <h3 class="text-green">{{ $working_area->title }}</h3>
            <p>{!! $working_area->description !!}</p>
        </div>
    </div>
    <button class="btn btn-success border-danger-subtle text-white"><a class="text-white" style="border: none; text-decoration: none" href="{{route('view.allworkingareas')}}">View All<i class="fas fa-arrow-alt-circle-right"></i></a></button>
@endsection

