@extends('layouts.app1')
@section('Heading', 'Gallery')

@section('content')
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Show Banner</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('galleries.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <div class="card card-body">
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="{{$gallery->image}}" alt="###">
            </div>
            <div class="col-6">
                <div>
                    <h1 style="color: #0a53be">{{$gallery->title}}</h1>
                    <p>{{$gallery->description}}</p>
                        <div class="text-right">
                            <a href="{{route('galleries.edit', $gallery->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                            <form action="{{route('galleries.destroy', $gallery->id)}}" method="post" style="display:inline-block">
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
        </div>
@endsection
