<div class="card-body">
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter name']) !!}
        @error('name')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('externallink', 'External Link') !!}
        {!! Form::textarea('externallink', null, ['class'=>'form-control p-2','rows'=> 4, 'cols' => 40, 'placeholder'=>' Enter externallink']) !!}
        @error('externallink')<span class="text-danger">{{$message}}</span>@enderror
    </div>

    <div class="form-group">
        <div>
            <div class="col-md-12 mb-2">
                <img id="preview-image-before-upload" src=""
                     alt="" style="max-height: 100px;">
            </div>
        </div>
        {!! Form::label('image', 'Image') !!}
        {!! Form::file('image', null, ['class'=>'form-control', 'placeholder'=>'Enter order', 'id' => 'image']) !!}
        @error('image')<span class="text-danger">{{$message}}</span>@enderror
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
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
