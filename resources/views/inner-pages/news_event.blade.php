@extends('layouts.innerpage')

<style>
    .containers{
        width: 100%;
    }
    .abouts-image{
        float: left;
        width: 30%;
        height: 30%;
        margin: 0 10px 0 0;
    }
    .text{
        text-align: justify;

    }
    .reverse .abouts-image {
        float: right;
        width: 50%;
        margin: 0 0 0 10px;
    }
    .reverse .text {
        text-align: justify;
    }
</style>
@if($newsSingle->category == 1)
    @section('heading','News')
@else
    @section('heading','Events')
@endif
@section('content')
            <div class="containers">
                    <img class="img-fluid abouts-image" src="{{ $newsSingle->image }}" alt="###">
                    <div class="text">
                        <h3 class="text-green">{{ $newsSingle->title }}</h3>
                        <p>{!! $newsSingle->description !!}</p>
                    </div>
            </div>
@endsection

