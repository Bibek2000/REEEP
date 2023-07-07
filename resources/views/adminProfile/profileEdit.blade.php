@extends('layouts.app1')
@section('title','Create')


@section('content')
    <form action="{{ route('admin.update', auth()->user()->id) }}" method="POST" id="regForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Edit Profile</h3>
                            <div class="form-group">
                                <div class="image">
                                        <img src={{asset('assets/image/default.jpeg')}} alt="Image" height="100" width="100">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" required autofocus>
                                @error('name')
                                <p class="text text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>

                                @error('email')
                                <p class="text text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-outline-success" data-mdb-ripple-color="dark"
                                    style="z-index: 1;"><i class="fa fa-edit"></i> Update</button>
                        </div>
                    </div>
                </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-center">Update Password</h4>
                            <form action="{{ route('admin.passwordUpdate',auth()->user()->id) }}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="">Old Password</label>
                                    <input type="password" name="old_password" class="form-control" id="">
                                    @error('old_password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" id="">
                                    @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Password Confirmation</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="">
                                </div>

                                <button class="btn btn-primary" type="submit">Update Password</button>
                            </form>
                        </div>
                    </div>
                        </div>

            </div>
        </div>
    </form>

    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview').attr('src', e.target.result);
                    $('#imagePreviewContainer').show();
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#imagePreview').attr('src', '#');
                $('#imagePreviewContainer').hide();
            }
        }
    </script>

@endsection



