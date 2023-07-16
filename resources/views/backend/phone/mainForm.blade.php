<div class="card-body">
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter name']) !!}
        @error('name')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('location', 'Location') !!}
        {!! Form::text('location', null, ['class'=>'form-control p-2', 'placeholder'=>' Enter location']) !!}
        @error('location')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('phone', 'Phone') !!}
        {!! Form::text('phone', null, ['class'=>'form-control p-2', 'placeholder'=>' Enter phone number']) !!}
        @error('phone')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class'=>'form-control p-2', 'placeholder'=>' Enter email']) !!}
        @error('email')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('maps', 'Map Location') !!}
        {!! Form::text('maps', null, ['class'=>'form-control p-2', 'placeholder'=>' Enter map location']) !!}
        @error('maps')<span class="text-danger">{{$message}}</span>@enderror
    </div>


    <div class="form-group">
        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Clear', ['class'=>'btn btn-danger']) !!}
    </div>
</div>

<script>
    $(document).ready(function (e) {


        $('#image').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });
</script>
