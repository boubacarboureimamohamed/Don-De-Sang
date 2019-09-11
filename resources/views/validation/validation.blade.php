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
   <form role="form" action="{{ route('validation.store', $dossier) }}" method="POST">

        {{ csrf_field() }}
        {{ method_field('PUT') }}
 
       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
               <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Le don / La validation') }}</h3>
                     </div>
               </div>
                <div class="row">
                     <input type="text"value="{{ $dossier->donneur->id }}"name="donneur_id" hidden>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                 <input id="" type="text" title="Le numéro du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->donneur->num_donneur }}" readonly="" placeholder="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" title="Le numéro de don du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->num_don }}" readonly="" placeholder="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text" title="Le nom du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->donneur->nom }}" readonly="" placeholder="Username">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text" title="Le prénom du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->donneur->prenom }}" readonly="" placeholder="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" title="Le type du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->donneur->typedonneur->type_donneur }}" readonly="" placeholder="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" title="La quantité à prélevée" data-toggle="tooltip" class="form-control" value="{{ $dossier->quantite_a_prelevee }}" readonly="" placeholder="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text"title="Entrer le type de poche" data-toggle="tooltip" class="form-control" name="type_poche" value="{{ $dossier->type_poche }}" readonly=""  class="form-control form-control-default">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" title="Entrer la quantité prélevée" data-toggle="tooltip" class="form-control" value="{{ $dossier->quantite_prelevee }}" readonly="" name="quantite_prelevee">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" title="Entrer le type de prélèvement" data-toggle="tooltip" type="text" class="form-control" value="{{ $dossier->type_prelevement }}" readonly="" name="type_prelevement" class="form-control form-control-default">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" title="Entrer l'Observation" data-toggle="tooltip" type="text" class="form-control" value="{{ $dossier->observation_prelevement }}" readonly="" name="observation_prelevement">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-primary">
                          <div class="form-radio">
                              <div class="group-add-on">
                                <div class="radio radiofill radio-inline" id="accepter">
                                    <label>
                                        <input type="radio" value="1" name="rejet"><i class="helper"></i> Accepter
                                    </label>
                                </div>
                                <div class="radio radiofill radio-inline" id="refuser">
                                        <label>
                                        <input type="radio" value="0" name="rejet"><i class="helper"></i> Refuser
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
                                <input id="" title="Entrer l'Observation" data-toggle="tooltip" type="text" class="form-control" name="motif_rejet">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6" id="groupe">
                            <div class="form-group form-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                    <select name="groupement_id" id="groupement_id" class="form-control">
                                        @foreach($groupements as $groupement)
                                            <option value="{{ $groupement->id }}">
                                                {{ $groupement->groupe_sanguin }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row m-t-30">
                      <div class="col-md-5">

                      </div>
                      <div class="col-md-7">
                         <a href="{{ route('prelevement.donneur_apte_a_prelevee') }}" class="btn btn-grd-disabled">
                               {{ ('Annuler') }}
                         </a>
                          <button type="submit" class="btn btn-success">
                               {{ __('Effectuer') }}
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


    <script>
    $(document).ready(function(){
     $('#groupe').hide();
     $('#accepter').click(function(){
      $('#groupe').show();
     $('#refuser').click(function(){
      $('#groupe').hide();
     });
     });
    });


</script>


@endsection
