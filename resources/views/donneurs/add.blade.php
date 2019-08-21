@extends('layouts.adminty')
@section('css')

  <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\demo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\j-pro-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\advance-elements\css\bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\bootstrap-daterangepicker\css\daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\datedropper\css\datedropper.min.css') }}">

    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\sweetalert\css\sweetalert.css') }}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css\component.css') }}">
@endsection

@section('content')

<div class="col-sm-12">
    <form role="form" action="{{ route('donneurs.store') }}" method="POST">
        @csrf
        <div class="auth-box card">
          <div class="card-block">
               <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ __('Ajout d\'un nouveau donneur') }}</h3>
                     </div>
               </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                        <input type="text" id="num_donneur" name="num_donneur" class="form-control" required="" placeholder="Numéro donneur">
                                        @if($errors->has('num_donneur'))
                                            <p style="color: red">  {{ $errors->first('num_donneur')}} </p>
                                        @endif
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                    <select name="typedonneur_id" id="typedonneur_id" class="form-control">
                                        @foreach($ts as $t)
                                            <option value="{{ $t->id }}"> {{ $t->type_donneur }} </option>
                                        @endforeach
                                    </select>
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                        <input type="text" id="nom" name="nom" class="form-control" required="" placeholder="Nom donneur">

                                        @if($errors->has('nom'))
                                            <p style="color: red">  {{ $errors->first('nom')}} </p>
                                        @endif
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                        <input type="text" id="prenom" name="prenom" class="form-control" required="" placeholder="Prénom donneur">
                                        @if($errors->has('prenom'))
                                            <p style="color: red">  {{ $errors->first('prenom')}} </p>
                                        @endif
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-ui-calendar"></i></span>
                                    <input type="text" name="date_naiss" class="form-control" required="" placeholder="Date de naissance">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                        <input type="text" id="" name="lieu_naiss" class="form-control" required="" placeholder="Lieu de naissance">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="form-radio">
                                <div class="group-add-on">
                                    <div class="radio radiofill radio-inline">
                                      <label>
                                        <input type="radio" id="sexe" name="sexe" value="homme"><i class="helper"></i> Homme
                                      </label>
                                    </div>
                                    <div class="radio radiofill radio-inline">
                                       <label>
                                          <input type="radio" id="sexe" name="sexe" value="femme"><i class="helper"></i> Femme
                                        </label>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <select name="situation_mat_id" id="situation_mat_id" class="form-control">
                                    @foreach($ps as $p)
                                        <option value="{{ $p->id }}"> {{ $p->situation_matrimoniale }} </option>
                                    @endforeach
                                </select>
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-flag"></i></span>
                                    <input type="text" id="" name="nationalite" class="form-control" required="" placeholder="Nationalité">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                        <input type="text" id="adresse" name="adresse" class="form-control" required="" placeholder="Adresse domicile">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                        <input type="text" id="" name="profession" class="form-control" required="" placeholder="Profession">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                    <select name="organisation_id" id="organisation_id" class="form-control">
                                        @foreach($os as $o)
                                        <option value="{{ $o->id }}"> {{ $o->libelle }} </option>
                                        @endforeach
                                   </select>
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-envelope"></i></span>
                                    <input type="email" id="" name="email" class="form-control" required="" placeholder="Adresse mail">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                        <input type="text" id="telephone" name="telephone" class="form-control" required="" placeholder="Téléphone">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="text-center">
                     <a href="{{ route('donneurs.index') }}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
                        <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success']);">Enregister</button>
                        {{-- <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button> --}}
                </div>
           </div>
       </div>
    </form>
</div>

@endsection

@section('js')
 <!-- j-pro js -->
    <script type="text/javascript" src="{{ asset('js\j-pro\js\jquery.ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\j-pro\js\jquery.j-pro.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js\advance-elements\custom-picker.js') }}"></script>


    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="{{ asset('js\advance-elements\moment-with-locales.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components\bootstrap-datepicker\js\bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\advance-elements\bootstrap-datetimepicker.min.js') }}"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="{{ asset('bower_components\bootstrap-daterangepicker\js\daterangepicker.js') }}"></script>
    <!-- Date-dropper js -->

    <!-- sweet alert js -->
    <script type="text/javascript" src="{{ asset('bower_components\sweetalert\js\sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\modal.js') }}"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="{{ asset('assets\js\modalEffects.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets\js\classie.js') }}"></script>


@endsection



