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
                    {{ ('Le don / Le prélèvement') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
   <form role="form" action="{{ route('prelevement.store', $dossier) }}" method="POST">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

       <div class="auth-box card">
          <div class="card-block">
          <div class="card-block">
               <div class="row m-b-30">
               </div>
                <div class="row">
                     <input type="text"value="{{ $dossier->donneur->id }}"name="donneur_id" hidden>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                 <input id="" type="text" title="Le numéro du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->donneur->num_donneur }}" readonly=""  placeholder="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" title="Le numéro de don du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->num_don }}" readonly=""  placeholder="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text" title="Le nom du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->donneur->nom }}" readonly=""  placeholder="Username">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input id="" type="text" title="Le prénom du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->donneur->prenom }}" readonly=""  placeholder="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" title="Le type du donneur" data-toggle="tooltip" class="form-control" value="{{ $dossier->donneur->prenom }}" readonly=""  placeholder="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" title="Type de poche" data-toggle="tooltip" class="form-control" value="{{ $dossier->type_poche }}" readonly=""  placeholder="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <input id="" type="text" title="Entrer la quantité prélevée" data-toggle="tooltip" value="{{ old('quantite_prelevee') }}" class="form-control" placeholder="Quantité prélevée" name="quantite_prelevee"  placeholder="Quantité Prélèvée">
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <select id="" title="Entrer le type de prélèvement" value="{{ old('type_prelevement') }}" data-toggle="tooltip" type="text" class="form-control" placeholder="type de prélèment" name="type_prelevement"  placeholder="Type de Prélèvement" class="form-control form-control-default">
                                    <option value="Normale">Normal</option>
                                    <option value="Anormale">Anormale</option>
                                </select>
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-file-text"></i></span>
                                <textarea placeholder="Observations" value="{{ old('observation_prelevement') }}" rows="1" title="Entrer votre observation" data-toggle="tooltip" class="form-control" spellcheck="false"  name="observation_prelevement"></textarea>
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
                <div class="row m-t-30">
                      <div class="col-md-5">

                      </div>
                      <div class="col-md-7">
                         <a href="{{ route('prelevement.donneur_apte_a_prelevee') }}" class="btn btn-default">
                               {{ ('Annuler') }}
                         </a>
                          <button type="submit" class="btn btn-primary">
                               {{ ('Prélever') }}
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

@endsection
