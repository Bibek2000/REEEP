@extends('layouts.app1')
@section('Heading','Working Area')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h2>Edit</h2>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($workingarea, ['route' => ['workingareas.update', $workingarea], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    @method("PUT")
                    <div class="card-body">
                    <div class="form-group">
                        Image:
                        <img src="{{ asset($workingarea->image) }}" alt="Image" height="100" width="100">
                    </div>
                    </div>
                        @include('backend.workingarea.mainForm')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#name").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slug").val(Text);
        });
    </script>
@endsection