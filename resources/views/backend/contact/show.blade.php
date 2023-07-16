@extends('layouts.app1')
@section('Heading', 'Contacts')
@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Message</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
                </div>
            </div>
        </div>
<div class="card card-body">
        <div class="row">
            <div class="col-6 ml-2">
                <div>
                    Name:<h1 style="color: #0a53be">{{$contact->name}}</h1>
                    Email:<h3>{{$contact->email}}</h3>
                    Subject:<h3>{{$contact->subject}}</h3>
                    <p>{{$contact->message}}</p>
                        <div>
                            <form action="{{route('contacts.destroy', $contact->id)}}" method="post" class="justify-content-lg-start" style="display: inline-block">
                                @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-block btn-danger sa-warning align-content-lg-start">
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
