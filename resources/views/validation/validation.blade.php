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
                    {{ ('Le don / La validation') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
   <form role="form" action="{{ route('validation.store', $dossier) }}" method="POST" id="formvalide">
        <input type="hidden" value="{{ $dossier->type_poche }}" name="type_poche" id="type_poche">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
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
                                <input id="" type="text"title="Entrer le type de poche" data-toggle="tooltip" class="form-control" name="type_poche" value="{{ $dossier->type_poche }}" readonly=""  class="form-control form-control-default">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont-laboratory"></i></span>
                                <input id="" type="text" title="Entrer la quantité prélevée" data-toggle="tooltip" class="form-control" value="{{ $dossier->quantite_prelevee }}" readonly="" name="quantite_prelevee">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont-file-text"></i></span>
                                <input id="" title="Entrer l'Observation" data-toggle="tooltip" type="text" class="form-control" value="{{ $dossier->observation_prelevement }}" readonly="" name="observation_prelevement">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-file-text"></i></span>
                               <textarea id="" title="Entrer l'Observation" placeholder="observation de la validation" data-toggle="tooltip" type="text" class="form-control" name="motif_rejet"  rows="1"></textarea>
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
                                        <input type="radio" value="0" name="rejet"><i class="helper"></i> Rejeter
                                        </label>
                                </div>
                              </div>
                          </div>
                     </div>
                   </div>
                    <div class="col-sm-6" id="groupe">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-blood-drop"></i></span>
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
                         <a href="{{ route('prelevement.donneur_prelevee') }}" class="btn btn-default">
                               {{ ('Annuler') }}
                         </a>
                          <button type="button" onclick="confirmation()" class="btn btn-primary">
                               {{ ('Valider') }}
                          </button>
                      </div>
                 </div>
                 </div><hr>
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
            $('#groupe').hide();
            $('#accepter').click(function(){
            $('#groupe').show();
            $('#refuser').click(function(){
            $('#groupe').hide();
            });
            });
            });
    </script>

    <script>

     function confirmation()
        {
            swal({
                title: "Êtes-vous sûr ???",
                text: "Une fois validé, la poche de sang est directement envoyé en stock! ",
                type: "warning",
                showCancelButton: true,
                confirmButtonText:'Oui',
                cancelButtonText:'Non'

            }).then(function() {
                $('#formvalide').submit();
            });
        }

    </script>


@endsection
