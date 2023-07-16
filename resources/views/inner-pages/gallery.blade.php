@extends('layouts.innerpage')

    @section('heading','Gallery')
@section('content')
    <div class="row">
        @foreach($albumData as $album)
            <div class="col-4">
                <div class="content discovery">
                    <div class="content-overlay"></div> <img class="content-image" src="{{$album->image}}" height="250px">
                    <div class="content-details fadeIn-bottom">
                        {{--                            <p class="content-text"><i class="fa fa-arrow-alt-circle-right"></i>Learn More</p>--}}
                        <button type="button" class="rounded-circle mx-2 centered-button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$album->id}}">
                            <i class="fa-solid fa-camera-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$album->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">{{$album->name}}</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                        @foreach($album->gallery as $item)

                                        <div class="carousel-item {{$loop->index == 0 ? 'active' : ''}}">
                                            <img src="{{$item->image}}" class="d-block w-100" alt="...">
                                            <p style="font-size: large; font-weight: bold" class="text-center">{{$item->title}}</p>
                                        </div>
                                    @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
    @endforeach
@endsection

