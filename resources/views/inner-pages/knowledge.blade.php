@extends('layouts.innerpage')

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
@section('heading','Knowledge and Resources')
@section('content')
    @foreach($knowledgeDatas as $knowledgeData)
        <div class="container @if ($loop->index % 2 === 1) reverse @endif mb-5">
            <div class="about-image shadow p-3 mb-5 bg-white rounded">
            <img class="img-fluid" src="{{ $knowledgeData->image }}" alt="###">
            </div>
            <div class="text">
                <h3 class="text-green">{{ $knowledgeData->title }}</h3>
                <p>{!! $knowledgeData->description !!}</p>
                <a href="{{$knowledgeData->pdf}}" download>Download PDF</a>
            </div>
        </div>
    @endforeach
@endsection

