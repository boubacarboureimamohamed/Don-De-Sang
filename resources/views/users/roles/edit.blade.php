@extends('layouts.adminty')

@section('css')

    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/css/select2.min.css') }}">

@endsection

@section('content')

<div class="col-sm-12">
   <form method="POST" action="{{ route('roles.update', $role) }}" class="md-float-material form-material">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
               <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Modification d\'un rôle') }}</h3>
                     </div>
               </div>
                <div class="row">
                    <div class="col-sm-12">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                     <input id="name" type="text" class="form-control" name="role" value="{{ $role->name }}"  required="" placeholder="Rôle">
                            </div>

<!-- Multi-select start -->
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h4 class="sub-title">Permissions</h4>
                                                            <select id='custom-headers' class="searchable" name="permissions[]" multiple='multiple'>

                                                               @foreach ($permissions as $permission)
                                                                  <option @if(in_array($permission->id, $role->permissions->pluck('id')->toArray())) {{ 'selected' }} @endif value='{{ $permission->id }}'>{{ $permission->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Multi-select end -->
                         </div>
                     </div>
                </div>
                <div class="row m-t-10">
                      <div class="col-md-5">

                      </div>
                      <div class="col-md-7">
                         <a href="{{ route('roles.index') }}" class="btn btn-grd-disabled">
                               {{ ('Annuler') }}
                         </a>
                          <button type="submit" class="btn btn-primary ">
                               {{ __('Modifier') }}
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
