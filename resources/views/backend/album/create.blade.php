@extends('layouts.app1')
@section('Heading','Album')
@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h2>Create</h2>
                </div>
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
