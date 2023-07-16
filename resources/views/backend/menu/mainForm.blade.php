
{{--    <div class="form-group">--}}
{{--        {!! Form::label('parent_id', 'Parent')!!}--}}
{{--        {!! Form::select('parent_id',$menuOptions, null, ['class'=>'form-control', 'placeholder'=>'Select Parent']) !!}--}}
{{--    </div>--}}
{{--        <div class="form-group">--}}
{{--            <!-- Child Menu Select (dependent on the parent menu) -->--}}
{{--            {!! Form::label('child_menu', 'Child Menu') !!}--}}
{{--            {!! Form::select('child_menu', $childMenuOptions, null, [--}}
{{--                'class' => 'form-control',--}}
{{--                'placeholder' => 'Select Child Menu',--}}
{{--            ]) !!}--}}
{{--        </div>--}}




    <div class="form-group">
        {!! Form::label('name', 'Menu') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Menu']) !!}
        @error('name')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>' Enter Slug']) !!}
        @error('slug')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('order', 'Order') !!}
        {!! Form::number('order', null, ['class'=>'form-control', 'placeholder'=>'Enter order']) !!}
        @error('order')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Status') !!}<br>
        {!! Form::radio('status', 0, ['class'=>'form-control']) !!}
        {!! Form::label('approved_status', 'Not Approved') !!}<br>
        {!! Form::radio('status', 1, ['class'=>'form-control']) !!}
        {!! Form::label('approved_status', 'Approved') !!}<br>
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Clear', ['class'=>'btn btn-danger']) !!}
    </div>
</div>
