@extends('layouts.adminty')

@section('css')

    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/css/select2.min.css') }}">

@endsection

@section('content')

<div class="col-sm-12">
   <form method="POST" action="{{ route('users.update', $user) }}" class="md-float-material form-material">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
               <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ __('Modification d\'un utilisateur') }}</h3>
                     </div>
               </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required="" placeholder="Username">

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
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required="" placeholder="Your Email Address">

                                        @error('email')
                                            <span class="form-bar" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                                </div>
                         </div>
                     </div>
                </div>
                <!-- Multi-select start -->
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xl-6 m-b-30">
                                                            <h4 class="sub-title">Permissions</h4>
                                                            <select id='custom-headers' class="searchable" multiple='multiple'>
                                                                <option value='elem_1' selected="">elem 1</option>
                                                                <option value='elem_2'>elem 2</option>
                                                                <option value='elem_3'>elem 3</option>
                                                                <option value='elem_4' selected="">elem 4</option>
                                                                <option value='elem_5'>elem 5</option>
                                                                <option value='elem_6'>elem 6</option>
                                                                <option value='elem_7'>elem 7</option>
                                                                <option value='elem_8'>elem 8</option>
                                                                <option value='elem_9'>elem 9</option>
                                                                <option value='elem_10'>elem 10</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-6 m-b-30">
                                                            <h4 class="sub-title">Rôles</h4>
                                                            <select id='custom-headers' class="searchable" multiple='multiple'>
                                                                <option value='elem_1' selected="">elem 1</option>
                                                                <option value='elem_2'>elem 2</option>
                                                                <option value='elem_3'>elem 3</option>
                                                                <option value='elem_4' selected="">elem 4</option>
                                                                <option value='elem_5'>elem 5</option>
                                                                <option value='elem_6'>elem 6</option>
                                                                <option value='elem_7'>elem 7</option>
                                                                <option value='elem_8'>elem 8</option>
                                                                <option value='elem_9'>elem 9</option>
                                                                <option value='elem_10'>elem 10</option>
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
                           <button type="submit" class="btn btn-primary ">
                               {{ __('Modifier') }}
                          </button>
                      </div>
                 </div>
                 </div> <hr>
                  <div class="row">
                      <div class="col-md-11">
                        <p class="text-inverse text-left m-b-0">Don Du Sang</p>
                        <p class="text-inverse text-left">Blood Donation</a></p>
                      </div>
                      <div class="col-md-1">
                         <img src="{{ asset('images\auth\Logo-small-bottom.png') }}" alt="small-logo.png">
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

