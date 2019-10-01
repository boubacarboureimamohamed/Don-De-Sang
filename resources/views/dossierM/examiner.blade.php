@extends('layouts.adminty')
@section('css')

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
                    {{ ('Entretien médical') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
   <form role="form" action="{{ route('dossierM.store') }}" method="POST">
    @csrf
       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
                <div class="row">
                    <input type="text"value="{{ $donneur->id }}"name="donneur_id" hidden>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                 <input id="" type="text" title="Le numéro du donneur" data-toggle="tooltip" class="form-control" value="{{ $donneur->num_donneur }}" placeholder="{{ $donneur->nom }}" readonly="" placeholder="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text"  class="form-control" value="{{ $donneur->nom }}" readonly=""  placeholder="Username">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text" class="form-control" value="{{ $donneur->prenom }}" readonly=""  placeholder="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text"  title="Entrer le poid du donneur" value="{{ old('poid') }}" data-toggle="tooltip" class="form-control" placeholder="Poid du Donneur" name="poid">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-thermometer-alt"></i></span>
                                <input id="" type="text" title="Entrer la température du donneur" value="{{ old('temperature') }}" data-toggle="tooltip" class="form-control" placeholder="Température" name="temperature" placeholder="Type de Poche">
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-heartbeat"></i></span>
                                <input id="" type="text" title="Entrer la tension artérielle" data-toggle="tooltip" value="{{ old('tension_arterielle') }}" class="form-control" placeholder="Tension artérielle" name="tension_arterielle">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-radio">
                           <div class="group-add-on">
                               <div class="radio radiofill radio-inline" id="apte">
                                   <label>
                                      <input type="radio" value="1" name="approbation"><i class="helper"></i> Apte
                                   </label>
                               </div>
                                <div class="radio radiofill radio-inline" id="inapte">
                                    <label>
                                       <input type="radio" value="0" name="approbation"><i class="helper"></i> Inapte
                                    </label>
                               </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-file-text"></i></span>
                               <textarea placeholder="Observations" rows="1" title="Entrer votre observation" data-toggle="tooltip" class="form-control" spellcheck="false" id="observation_approbation" name="observation_approbation"></textarea>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-sm-6" id="quantite">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-laboratory"></i></span>
                                <input id="" type="text" title="Entrer la quantité à prélevée" data-toggle="tooltip" class="form-control" placeholder="Quantité à prélevée" name="quantite_a_prelevee">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row m-t-20">
                      <div class="col-md-5">

                      </div>
                      <div class="col-md-7">
                         <a href="{{ route('donneurs.index') }}" class="btn btn-default">
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

<script>
    $(document).ready(function(){
     $('#quantite').hide();
     $('#apte').click(function(){
      $('#quantite').show();
     $('#inapte').click(function(){
      $('#quantite').hide();
     });
     });
    });


</script>


@endsection



