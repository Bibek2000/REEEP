@extends('layouts.app1')
@section('Heading', 'About')

@section('content')
    <div class="card-body">
        <h2>View About</h2>
        <div class="btn btn-success" style="margin-bottom: 5px"><a href="{{route('abouts.create')}}">
                <i class="fas fa-plus text-white"></i></a>
        </div>
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="{{$about->image}}" alt="###">
            </div>
            <div class="col-6">
                <div>
                    <h1 style="color: #0a53be">{{$about->title}}</h1>
                    <p>{{$about->description}}</p>
                        <div class="text-right">
                            <a href="{{route('abouts.edit', $about->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                            <form action="{{route('abouts.destroy', $about->id)}}" method="post" style="display:inline-block">
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
