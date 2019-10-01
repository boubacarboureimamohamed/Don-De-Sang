@extends('layouts.app')

@section('content')

 <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="md-float-material form-material">

                        @csrf

                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center"> {{ ('Récupèrer votre mot de passe') }}</h3>
                                    </div>
                                </div>

                                <div class="form-group form-primary">
                                    <input id="email" type="email" title="Votre adresse mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" data-toggle="tooltip"  placeholder="Votre adresse mail">

                                    @error('email')
                                    <span class="form-bar" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                        {{ __('Envoyer le lien de réinitialisation du mot de passe') }}
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
                                            <img src="{{ asset('images/DDS/logo-blue.png') }}" alt="logo">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

@endsection
