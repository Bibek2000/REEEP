@extends('layouts.app1')
@section('Heading', 'About')

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show About</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('abouts.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="card card-body">


        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="{{$about->image}}" alt="###">
            </div>
            <div class="col-6">
                <div>
                    <h1 style="color: #0a53be">{{$about->title[App::getLocale()] ?? 'Default Title'}}</h1>
                    <p>{{$about->description[App::getLocale()] ?? 'Default Title'}}</p>
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
    </div>
@endsection
