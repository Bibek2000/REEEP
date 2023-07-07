@extends('layouts.app1');
@section('Heading','Admin Profile')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
                <img src="{{asset('assets/image/default.jpeg')}}" alt="..." width="300" height="300">
            <div class="mt-4">
                Name: <h5 style="color: #0a53be">{{auth()->user()->name}}</h5>
                Email: <h5 style="color: #0a53be">{{auth()->user()->email}}</h5>
                <a href="{{route('admin.edit', auth()->user()->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        </div>
        </div>
    </div>
@endsection

