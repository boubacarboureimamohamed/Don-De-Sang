@extends('layouts.app')

@section('content')

<section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="{{ route('password.update') }}" class="md-float-material form-material">

                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="text-center">
                            <img src="..\files\assets\images\logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">{{ __('Reset Password') }}</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required="" placeholder="E-Mail Address">

                                    @error('email')
                                    <span class="form-bar" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group form-primary">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="" placeholder="New Password">

                                    @error('password')
                                    <span class="form-bar" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group form-primary">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" placeholder="Confirm New Password">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                        {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left">Back to <a href="{{ route('login') }}">Login.</a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ asset('images\auth\Logo-small-bottom.png') }}" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

@endsection
