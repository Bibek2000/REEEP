<div class="card-body">
    <div class="form-group">
        {!! Form::label('network', 'Social Media Links') !!}
        {!! Form::text('network', null, ['class'=>'form-control', 'placeholder'=>'Enter social media link']) !!}
        @error('network')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('icon', 'Icon') !!}
        {!! Form::text('icon', null, ['class'=>'form-control p-2','placeholder'=> 'Enter icon link']) !!}
        @error('icon')<span class="text-danger">{{$message}}</span>@enderror
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

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
