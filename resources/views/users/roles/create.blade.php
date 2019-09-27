@extends('layouts.adminty')

@section('css')

    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/css/select2.min.css') }}">

@endsection

@section('content')

<div class="col-sm-12">
    @php
         $color = 'pink';
    @endphp
   <div class="card bg-c-{{$color}}">
        <div class="card-header">
          <h3 class="text-center text-white">
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
                    {{ ('Ajout d\'un nouveau rôle') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">

   <form method="POST" action="{{ route('roles.store') }}" class="md-float-material form-material">

         @csrf

       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
                <div class="row">
                    <div class="col-sm-12">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                     <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Rôle">
                            </div>

<!-- Multi-select start -->
                            <div class="card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="sub-title">Permissions</h4>
                                            <select id='custom-headers' class="searchable" name="permissions[]" multiple='multiple'>

                                            @foreach ($permissions as $permission)

                                                <option value='{{ $permission->id }}'>{{ $permission->name }}</option>
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
                         <a href="{{ route('roles.index') }}" class="btn btn-default">
                               {{ ('Annuler') }}
                         </a>
                          <button type="submit" class="btn btn-primary">
                               {{ ('Enregistrer') }}
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
