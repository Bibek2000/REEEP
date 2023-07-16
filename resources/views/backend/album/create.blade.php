@extends('layouts.app1')
@section('Heading','Album')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Album</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('albums.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::open(['route' => 'albums.store', 'enctype' => 'multipart/form-data']) !!}
                        @include('backend.album.mainForm')
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
{{--            <script>--}}
{{--                $("#name").keyup(function() {--}}
{{--                    var Text = $(this).val();--}}
{{--                    Text = Text.toLowerCase();--}}
{{--                    Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');--}}
{{--                    $("#slug").val(Text);--}}
{{--                });--}}
{{--            </script>--}}


@endsection
