@extends('layouts.app1')
@section('Heading','Our Contact')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit ContactUs</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('phones.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card card-primary">
                    <!-- form start -->
                    {!! Form::model($phone, ['route' => ['phones.update', $phone], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    @method("PUT")
                        @include('backend.phone.mainForm')
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
