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
                    {{ ('Modification de la consultation') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
   <form role="form" action="{{ route('dossierM.updatedonneursexaminer', $donneurexaminer) }}" method="POST">
     {{ csrf_field() }}
     {{ method_field('PUT') }}
       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
               <div class="row">
                    <input type="text"value="{{ $donneurexaminer->donneur->id }}"name="donneur_id" hidden>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                 <input id="" type="text" title="Le numéro du donneur" data-toggle="tooltip" class="form-control" value="{{ $donneurexaminer->donneur->num_donneur }}"  readonly="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text" title="Le nom du donneur" data-toggle="tooltip" class="form-control" value="{{ $donneurexaminer->donneur->nom }}" readonly="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text"  title="Le prénom du donneur" data-toggle="tooltip" class="form-control" value="{{ $donneurexaminer->donneur->prenom }}" readonly=""  placeholder="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" title="modifier le poid du donneur" data-toggle="tooltip" class="form-control" value="{{ $donneurexaminer->poid }}" name="poid">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-thermometer-alt"></i></span>
                                <input id="" type="text" value="{{ $donneurexaminer->temperature }}" title="modifier la température du donneur" data-toggle="tooltip" class="form-control" placeholder="Température" name="temperature" placeholder="Type de Poche">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-heartbeat"></i></span>
                                <input id="" type="text" value="{{ $donneurexaminer->tension_arterielle }}" title="Entrer la tension artérielle" data-toggle="tooltip" class="form-control" placeholder="Tension artérielle" name="tension_arterielle"">
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
                                    <input type="radio" value="1" checked name="approbation"><i class="helper"></i> Apte
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
                            <textarea placeholder="Observations" value="{{ $donneurexaminer->observation_approbation }}" rows="1" title="Entrer votre observation" data-toggle="tooltip" class="form-control" spellcheck="false" id="observation_approbation" name="observation_approbation"></textarea>
                        </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="quantite">
                    <div class="form-group form-primary">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icofont icofont"></i></span>
                        <select type="text"title="Entrer le type de poche" data-toggle="tooltip" class="form-control" value="{{ old('type_poche') }}" placeholder="Type de poche" name="type_poche"  placeholder="Type de Poche" class="form-control form-control-default">
                            <option value="Double" >Double</option>
                            <option value="Simple">Simple</option>
                        </select>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-30">
                    <div class="col-md-5">

                    </div>
                    <div class="col-md-7">
                        <a href="{{ route('dossierM.donneursexaminer') }}" class="btn btn-default">
                            {{ ('Annuler') }}
                        </a>
                        <button type="submit" class="btn btn-primary">
                            {{ ('Modifier') }}
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



