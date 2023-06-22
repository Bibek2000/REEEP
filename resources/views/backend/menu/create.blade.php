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
                {!! Form::open(['route' => 'menus.store']) !!}
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
<script>
    $(document).ready(function() {
        var childMenuOptions = {!! json_encode($childMenuOptions) !!};

        // Parent Menu Select Change Event
        $('#parent_id').change(function() {
            var parentMenuId = $(this).val();

            // Clear Child Menu Select
            $('#child_menu').html('');

            if (parentMenuId) {
                var options = childMenuOptions[parentMenuId];

                // Add Child Menu Options
                $.each(options, function(key, value) {
                    $('#child_menu').append($('<option>').text(value).attr('value', key));
                });
            }
        });
    });
</script>
@endsection
