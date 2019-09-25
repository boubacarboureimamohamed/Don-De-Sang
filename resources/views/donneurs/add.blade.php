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
    <form role="form" action="{{ route('donneurs.store') }}" method="POST" id="form1">
        @csrf
        <div class="auth-box card">
          <div class="card-block">
               <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Ajout d\'un nouveau donneur') }}</h3>
                    </div>
                    <div class="notifications">
                        @if(session('error'))
                        <button class="btn btn-danger waves-effect" data-type="danger"  data-from="top" data-align="right" data-animation-in="animated bounceIn" data-animation-out="animated bounceOut">{{ session('error') }}</button>
                        @endif
                   </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                                                <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input class="form-control" type="text" value="{{ old('nom') }}" title="Entrer le nom du donneur" data-toggle="tooltip" id="nom" name="nom" class="form-control" placeholder="Nom donneur">
                                
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                        <input type="text" value="{{ old('prenom') }}" title="Entrer le prénom du donneur" data-toggle="tooltip" id="prenom" name="prenom" class="form-control" placeholder="Prénom donneur">
                                        
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-ui-calendar"></i></span>
                                    <input type="date" title="Entrer la date de naissance du donneur" value="{{ old('date_naiss') }}" data-toggle="tooltip" name="date_naiss" class="form-control"  placeholder="Date de naissance">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                        <input type="text" value="{{ old('lieu_naiss') }}" title="Entrer le lieu de naissance du donneur" data-toggle="tooltip" id="" name="lieu_naiss" class="form-control"  placeholder="Lieu de naissance">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-flag"></i></span>
                                    <input type="text" value="{{ old('nationalite') }}" title="Entrer la nationalité du donneur" data-toggle="tooltip" id="" name="nationalite" class="form-control" placeholder="Nationalité">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                        <input type="text" value="{{ old('adresse') }}" title="Entrer l'adresse du donneur" data-toggle="tooltip" id="adresse" name="adresse" class="form-control"  placeholder="Adresse domicile">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                        <input type="text" title="Entrer la profession du donneur" data-toggle="tooltip" id="" value="{{ old('profession') }}" name="profession" class="form-control"  placeholder="Profession">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                <input type="text" title="Entrer le numéro de téléphone du donneur" value="{{ old('telephone') }}" data-toggle="tooltip-effect-9 tooltip-content-3" id="telephone" name="telephone" class="form-control"  placeholder="Téléphone">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <select name="typedonneur_id" value="{{ old('typedonneur_id') }}" title="Selectionner le type de donneur" size="1" onChange="mafonction(this.selectedIndex);" data-toggle="tooltip" id="typedonneur_id"  class="form-control">
                                    @foreach($ts as $t)
                                        <option value="{{ $t->id }}"> {{ $t->type_donneur }} </option>
                                    @endforeach
                                </select>
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6" style="display:none;" id="divorg">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <select name="organisation_id" value="{{ old('organisation_id') }}" title="Entrer l'organisation du donneur" data-toggle="tooltip"  id="organisation_id" class="form-control">
                                    <option selected="selected"></option>
                                    @foreach($os as $o)
                                    <option value="{{ $o->id }}"> {{ $o->libelle }} </option>
                                    @endforeach
                                </select>
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" >
                         <div class="form-group form-primary">
                             <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <select name="situation_matrimoniale" value="{{ old('situation_matrimoniale') }}" title="Selectionner la situation matrimonial du donneur" id="scroll" onChange="mafonction1(this.selectedIndex);" data-toggle="tooltip" id="situation_matrimoniale" class="form-control">
                                   <option value="Célibataire">Célibataire</option>
                                   <option value="Veuf(ve)">Veuf(ve)</option>
                                   <option value="Divorcé(e)">Divorcé(e)</option>
                                   <option value="Marié(e)">Marié(e)</option>
                                </select>
                            </div>
                         </div>
                     </div> 
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-envelope"></i></span>
                                <input type="email" value="{{ old('email') }}" title="Entrer l'email du donneur" data-toggle="tooltip" id="" name="email" class="form-control"  placeholder="Adresse mail">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                <div class="col-sm-6" id="statut" > 
                         <div class="form-group form-primary">
                            <div class="form-radio">
                                <div class="group-add-on">
                                    <div class="radio radiofill radio-inline">
                                      <label >
                                        <input type="radio" id="homme" name="sexe" value="homme"><i class="helper"></i> Homme
                                      </label>
                                    </div>
                                    <div class="radio radiofill radio-inline" id="femme">
                                       <label >
                                          <input type="radio" id="sexe"  name="sexe" value="femme"><i class="helper"></i> Femme
                                        </label>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6" id="divS" style="display:none;">
                         <div class="form-group form-primary">
                            <div class="form-radio">
                                <div class="group-add-on">
                                    <div class="radio radiofill radio-inline">
                                      <label>
                                        <input type="radio" id="situationmariee"  name="situationmariee" value="0"><i class="helper"></i> Monogame
                                      </label>
                                    </div>
                                    <div class="radio radiofill radio-inline">
                                       <label>
                                          <input type="radio" id="situationmariee" name="situationmariee" value="1"><i class="helper"></i> Polygame
                                        </label>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                   
                            </div>
                         </div>
                     </div>
                </div>
                <div class="text-center">
                
                     <a href="{{ route('donneurs.index') }}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
                        <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20">Enregister</button>
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


    <script type="text/javascript">
	function mafonction(i) {
		var divorg = document.getElementById('divorg');
		switch(i) {
            case 0 : divorg.style.display = 'none'; break;
            case 1 : divorg.style.display = 'none'; break;
			case 2 : divorg.style.display = ''; break;
			
		}
    }
   
   function mafonction1(i) {
       var divS = document.getElementById('divS');
       var homme = document.getElementById('homme');
       var femme = document.getElementById('femme');
       switch(i) {
             case 0 : divS.style.display = 'none'; break;
             case 1 : divS.style.display = 'none'; break;
             case 2 : divS.style.display = 'none'; break;
			 case 3 : divS.style.display = ''; break;
			
		}
      
   }

   $(document).ready(function(){
    $('#homme').click(function(){
        if($('#scroll').val() != 'Marié(e)') {
            $('#divS').hide();
        }
        
        
    });

    $('#femme').click(function(){
            $('#divS').hide();
        });
        
   });


</script>
 

@endsection




