@extends('layouts.app1')
@section('Heading', 'News and Event')

@section('content')
    <div class="card-body">
        <div class="btn btn-success" style="margin-bottom: 5px"><a href="{{route('news.create')}}">
                <i class="fas fa-plus text-white"></i></a>
        </div>
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="{{$news->image}}" alt="###">
            </div>
            <div class="col-6">
                <div>
                    <h1 style="color: #0a53be">{{$news->title}}</h1>
                    <p>{{$news->description}}</p>
                        <div class="text-right">
                            <a href="{{route('news.edit', $news->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                            <form action="{{route('news.destroy', $news->id)}}" method="post" style="display:inline-block">
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
