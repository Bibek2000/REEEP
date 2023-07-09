<style>
    /* DEMO GENERAL ============================== */
    .hover {
        overflow: hidden;
        position: relative;
        padding-bottom: 60%;
    }

    .hover-overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 90;
        transition: all 0.4s;
    }

    .hover img {
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: all 0.3s;
    }

    .hover-content {
        position: relative;
        z-index: 99;
    }
{{--    Demo 4--}}
    .hover-4 img {
        width: 110%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .hover-4 .hover-overlay {
        background: rgba(0, 0, 0, 0.4);
        z-index: 90;
    }

    .hover-4-title {
        position: absolute;
        bottom: 0;
        right: 0;
        padding: 3rem;
        z-index: 99;
    }

    .hover-4-description {
        position: absolute;
        top: 2rem;
        left: 2rem;
        text-align: right;
        border-right: 3px solid #fff;
        padding: 0 1rem;
        z-index: 99;
        transform: translateX(-1.5rem);
        opacity: 0;
        transition: all 0.3s;
    }

    .hover-4-button {
        position: absolute;
        top: 2rem;
        left: 21rem;
        text-align: right;
        padding: 0 1rem;
        z-index: 99;
        transform: translateX(-1.5rem);
        opacity: 0;
        transition: all 0.3s;
    }

    @media (min-width: 992px) {
        .hover-4-description {
            width: 50%;
        }
    }

    .hover-4:hover img {
        width: 100%;
    }

    .hover-4:hover::after {
        opacity: 1;
        transform: none;
    }

    .hover-4:hover .hover-4-description {
        opacity: 1;
        transform: none;
    }

    .hover-4:hover .hover-4-button {
        opacity: 1;
        transform: none;
    }

    .hover-4:hover .hover-overlay {
        background: rgba(0, 0, 0, 0.8);
    }
</style>
@extends('layouts.innerpage')
    @section('heading','News and Events')
@section('content')
<section id="news" class="news section-bg">
<div class="align-content-center">
    {!! Form::open(['route' => 'news.search', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
        @csrf
        <div class="form-group" style="display: flex;">
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Search news and events', 'required']) !!}
            @error('name')<span class="text-danger">{{$message}}</span>@enderror
            {!! Form::submit('Search', ['class'=>'btn btn-success']) !!}
        </div>
    {!! Form::close() !!}
</div>
        <div class="row">
            <div class="container d-flex align-items-center justify-content-center position-relative flex-wrap working-area ">

                <!-- DEMO 4 Item-->
                @foreach($newsData as $news)
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <div class="hover hover-4 text-white rounded mb-3"><img src="{{$news->image}}" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-4-content">
                                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0 text-white"><span class="font-weight-light">{{$news->title}}</h3>
                                <p class="hover-4-description text-uppercase mb-0 small text-white">{{substr($news->description, 0, 50)}}....</p>
                                <p class="hover-4-button text-uppercase mb-0 small"><a href="{{route('view.one', $news->id)}}"><button class="btn btn-success">Read More</button></a></p>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach

                <!-- DEMO 4 Item            -->

            </div>
        </div>
    </div>
    </div>

    </div>
</section>
@endsection
