@extends('layouts.adminty')
@section('css')

@endsection
@section('content')
 
<div class="col-sm-12">
    <form role="form" action="{{ route('prelevement.update', $prelevement) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
        <div class="auth-box card">
          <div class="card-block">
               <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Modification d\'un prélévement') }}</h3>
                     </div>
               </div>
               <input type="text"value="{{ $prelevement->donneur->id }}"name="donneur_id" hidden>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input type="text" class="form-control" value="{{ $prelevement->donneur->num_donneur }}" readonly="">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-key"></i></span>
                                <input type="text" class="form-control" value="{{ $prelevement->num_don }}" readonly="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                               <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input type="text" class="form-control" value="{{ $prelevement->donneur->nom }}" readonly="">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input type="text" class="form-control" value="{{ $prelevement->donneur->prenom }}" readonly="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-ui-settings"></i></span>
                                <input type="text" class="form-control" value="{{ $prelevement->donneur->typedonneur->type_donneur }}" readonly="">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont-laboratory"></i></span>
                                <input type="text" class="form-control" value="{{ $prelevement->quantite_a_prelevee }}" readonly="">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <select id="" title="Entrer le type de prélèvement" data-toggle="tooltip" type="text" class="form-control" placeholder="type de prélèment" name="type_prelevement"  placeholder="Type de Prélèvement" class="form-control form-control-default">
                                    <option value="Normale">Normal</option>
                                    <option value="Anormale">Anormale</option>
                                </select>
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-laboratory"></i></span>
                                <input type="text" class="form-control" title="Entrer le quantité à prélever" value="{{ $prelevement->quantite_prelevee }}" name="quantite_prelevee">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont"></i></i></span>
                                 <select type="text" title="Entrer le type de poche" data-toggle="tooltip" class="form-control" placeholder="Type de poche" name="type_poche"  placeholder="Type de Poche" class="form-control form-control-default">
                                    <option value="Double">Double</option>
                                    <option value="Simple">Simple</option>
                                </select>
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon" id="basic-addon1"><i class="icofont icofont-file-text"></i></span>
                                <input type="text" class="form-control" title="Observation sur le prélèvement" value="{{ $prelevement->observation_prelevement }}" name="observation_prelevement">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="text-center">
                     <a href="{{ route('prelevement.donneur_prelevee') }}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
                        <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success']);">Modifier</button>
                        {{-- <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button> --}}
                </div>
           </div>
       </div>
    </form>
</div>

@endsection

@section('js')


@endsection
