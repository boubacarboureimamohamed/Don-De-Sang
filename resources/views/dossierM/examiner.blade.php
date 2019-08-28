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
   <form role="form" action="{{ route('dossierM.store') }}" method="POST">
    @csrf
       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
               <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Entretien médical') }}</h3>
                     </div>
               </div>
                <div class="row">
                    <input type="text"value="{{ $donneur->id }}"name="donneur_id" hidden>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                 <input id="" type="text" class="form-control" value="{{ $donneur->num_donneur }}" placeholder="{{ $donneur->nom }}" readonly="" required="" placeholder="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" class="form-control" value="{{ $donneur->typedonneur->type_donneur }}" readonly="" required="" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text" class="form-control" value="{{ $donneur->nom }}" readonly="" required="" placeholder="Username">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text" class="form-control" value="{{ $donneur->prenom }}" readonly="" required="" placeholder="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" class="form-control" name="num_don" required="" placeholder="Numéro du don">
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" class="form-control" placeholder="Poid du Donneur" name="poid" required="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-thermometer-alt"></i></span>
                                <input id="" type="text" class="form-control" placeholder="Température" name="temperature" required="" placeholder="Type de Poche">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-heartbeat"></i></span>
                                <input id="" type="text" class="form-control" placeholder="Tension artérielle" name="tension_arterielle" required="" placeholder="Quantité Prélèvée">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-laboratory"></i></span>
                                <input id="" type="text" class="form-control" placeholder="Quantité à prélevée" name="quantite_a_prelevee" required="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-radio">
                           <div class="group-add-on">
                               <div class="radio radiofill radio-inline">
                                   <label>
                                      <input type="radio" value="1" name="approbation"><i class="helper"></i> Apte
                                   </label>
                               </div>
                                <div class="radio radiofill radio-inline">
                                    <label>
                                       <input type="radio" value="0" name="approbation"><i class="helper"></i> Inapte
                                    </label>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                               <span class="input-group-addon"><i class="icofont icofont-file-text"></i></span>
                               <textarea placeholder="Observations" class="form-control" spellcheck="false" id="observation_approbation" name="observation_approbation"></textarea>
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row m-t-30">
                      <div class="col-md-5">

                      </div>
                      <div class="col-md-7">
                         <a href="{{ route('dossierM.index') }}" class="btn btn-grd-disabled">
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



