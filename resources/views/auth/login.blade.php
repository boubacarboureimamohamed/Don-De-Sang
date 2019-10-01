@extends('layouts.app')

@section('content')

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                        <form method="POST" action="{{ route('login') }}" class="md-float-material form-material">

                             @csrf

                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                       
                                            <h3 class="text-center">{{ ('Authentification') }}</h3>
                                        </div> 
                                    </div>
                                    <div class="form-group form-primary">
                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-envelope"></i></span>
                                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Votre Adresse Mail">

                                                    @error('email')
                                                    <span class="form-bar" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-lock"></i></span>
                                                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Votre Mot de Pass">

                                                    @error('password')
                                                    <span class="form-bar" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary d-">
                                                <label>
                                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Se Souvenir de moi</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-right f-right">
                                                @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-right f-w-600"> {{ ('Mot de Pass Oublié?') }} </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                            {{ ('Se Connecter') }}
                                            </button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <p class="text-inverse text-left m-b-0">Don Du Sang</p>
                                            <p class="text-inverse text-left">Blood Donation</a></p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="{{ asset('images/DDS/logo-blue.png') }}" alt="small-logo.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

@endsection




