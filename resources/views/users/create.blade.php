@extends('layouts.adminty')

@section('css')

    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/css/select2.min.css') }}">

@endsection

@section('content')

<div class="col-sm-12">
   <form method="POST" action="{{ route('register') }}" class="md-float-material form-material">

         @csrf

       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
               <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Ajout d\'un nouveau utilisateur') }}</h3>
                     </div>
               </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required="" placeholder="Username">
                                    @error('name')
                                    <span class="form-bar" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-envelope"></i></span>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="" placeholder="Your Email Address">
                                    @error('email')
                                        <span class="form-bar" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-lock"></i></span>
                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="" placeholder="New Password">
                                    @error('password')
                                    <span class="form-bar" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-lock"></i></span>
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" placeholder="Confirm New Password">
                            </div>
                         </div>
                     </div>
                </div>
<!-- Multi-select start -->
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h4 class="sub-title">Rôles</h4>
                                                            <select id='custom-headers' class="searchable" name="roles[]" multiple='multiple'>

                                                            @foreach ($roles as $role)

                                                                <option value='{{ $role->id }}'>{{ $role->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Multi-select end -->
                <div class="row m-t-30">
                      <div class="col-md-5">

                      </div>
                      <div class="col-md-7">
                         <a href="{{ route('users.index') }}" class="btn btn-grd-disabled">
                               {{ ('Annuler') }}
                         </a>
                          <button type="submit" class="btn btn-success">
                               {{ __('Enregistrer') }}
                          </button>
                      </div>
                 </div>
                 </div> <hr>
                  <div class="row">
                      <div class="col-md-10">
                        <p class="text-inverse text-left m-b-0">Don Du Sang</p>
                        <p class="text-inverse text-left">Blood Donation</a></p>
                      </div>
                      <div class="col-md-2">
                         <img src="{{ asset('images/DDS/logo-blue.png') }}" alt="small-logo.png">
                      </div>
                 </div>
            </div>
        </div>
    </form>

</div>

@endsection

@section('js')
    <!-- Multiselect js -->
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.quicksearch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2-custom.js') }}"></script>

@endsection
