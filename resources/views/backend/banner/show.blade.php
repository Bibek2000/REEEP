@extends('layouts.app1')
@section('Heading', 'Banner')

@section('content')
    <div class="card-body">
        <div class="btn btn-success" style="margin-bottom: 5px"><a href="{{route('banners.index')}}">
                <i class="fas fa-list text-white"></i></a>
        </div>
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="{{$banner->image}}" alt="###">
            </div>
            <div class="col-6">
                <div>
                    <h1 style="color: #0a53be">{{$banner->title}}</h1>
                    <p>{{$banner->description}}</p>
                        <div class="text-right">
                            <a href="{{route('banners.edit', $banner->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                            <form action="{{route('banners.destroy', $banner->id)}}" method="post" style="display:inline-block">
                                @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-block btn-danger sa-warning">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
