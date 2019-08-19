@extends('layouts.adminty')

@section('css')

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
               <div class="form-group form-primary">
                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required="" placeholder="Username">

                     @error('name')
                    <span class="form-bar" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                </div>
                <div class="form-group form-primary">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required="" placeholder="Your Email Address">

                       @error('email')
                        <span class="form-bar" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                </div>
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

@endsection

