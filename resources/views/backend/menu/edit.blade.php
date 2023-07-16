@extends('layouts.app1')
@section('Heading','Menu')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Menu</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('menus.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card card-primary">
                    <!-- form start -->
                    {!! Form::model($menu, ['route' => ['menus.update', $menu], 'method' => 'post']) !!}
                    @method("PUT")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="menu">Menu:</label>
                            <select name="menu" id="menu" class="form-control">
                                <option value="" >Select a parent </option>
                                @foreach ($menus as $item)
                                    @include('partials.option', ['childMenu' => $item, 'parent_id'=> $menu->parent->id??"", 'depth' => 0])
                                @endforeach
                            </select>
                        </div>

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
