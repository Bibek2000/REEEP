<div class="card-body">
    <div class="form-group">
        {!! Form::label('name', 'Album Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter album name']) !!}
        @error('name')<span class="text-danger">{{$message}}</span>@enderror
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

{{--<input type="file" name="csv_file" required>--}}
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

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
