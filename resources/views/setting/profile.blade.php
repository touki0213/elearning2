@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('profile_update') }}">
        @csrf
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card" style="text-align: center">
                    <img src="https://media.istockphoto.com/vectors/user-icon-human-person-sign-vector-id587957104?k=6&m=587957104&s=170667a&w=0&h=umaeFHgEnWFB-A45hQYZXvrcqKh-2fnsx68pwcWCR1c="
                    style="width: 100%;" alt="">
                </div>
                <br>
                <!-- <input id="image" type="file" class="form-control" name="image" value="" required> -->
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $auth->name }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $auth->email }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
<script>
    function previewImage(obj)
    {
        var fileReader = new FileReader();
        fileReader.onload = (function() {
        document.getElementById('img').src = fileReader.result;
        });
        fileReader.readAsDataURL(obj.files[0]);
    }
</script>
@endsection