@extends('layouts.app1')
@section('Heading', 'Contacts')
@section('content')
    <div class="card-body">
        <h2 class="text-center">Show</h2>
        </div>
        <div class="row">
            <div class="col-6 ml-2">
                <div>
                    <h1 style="color: #0a53be">{{$contact->name}}</h1>
                    <h3>{{$contact->email}}</h3>
                    <h3>{{$contact->subject}}</h3>
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
@endsection
