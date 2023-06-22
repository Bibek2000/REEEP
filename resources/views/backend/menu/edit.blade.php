@extends('layouts.app1')
@section('Heading','Create Menu')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Menu</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($data['record'],['route' => 'menus.update'], 'method' => 'post']) !!}
                    @include('backend.menu.mainForm')
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
