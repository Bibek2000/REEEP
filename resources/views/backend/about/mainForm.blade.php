<div class="card-body">
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title[np]', null, ['class'=>'form-control', 'placeholder'=>'Enter title in nepali']) !!}
        @error('title')<span class="text-danger">{{$message}}</span>@enderror
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title[en]', null, ['class'=>'form-control', 'placeholder'=>'Enter title in english']) !!}
        @error('title')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description in nepali') !!}
        {!! Form::textarea('description[np]', null, ['class'=>'form-control p-2','rows'=> 4, 'cols' => 40 ,'placeholder'=>' Enter description in nepali', 'id'=>'editor']) !!}
        @error('description')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description in english') !!}
        {!! Form::textarea('description[en]', null, ['class'=>'form-control p-2','rows'=> 4, 'cols' => 40 ,'placeholder'=>' Enter description in english', 'id'=>'editor']) !!}
        @error('description')<span class="text-danger">{{$message}}</span>@enderror
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

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>