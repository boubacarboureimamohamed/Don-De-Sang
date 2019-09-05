@extends('layouts.adminty')
@section('css')

@endsection

@section('content')

<div class="col-sm-12">
    <form role="form" action="{{ route('donneurs.update', $donneur) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
        <div class="auth-box card">
          <div class="card-block">
               <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Modification d\'un nouveau donneur') }}</h3>
                     </div>
               </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                        <input type="text" title="Entrer le numéro du donneur" data-toggle="tooltip" id="num_donneur" name="num_donneur" class="form-control" value="{{ $donneur->num_donneur }}" required="" placeholder="Numéro donneur">
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
                                    <select name="typedonneur_id" title="Entrer le type de donneur" data-toggle="tooltip" id="typedonneur_id" class="form-control">
                                        @foreach($ts as $t)
                                            <option value="{{ $t->id }}" @if($t->id == $donneur->typedonneur_id) {{ 'selected' }} @endif>
                                               {{ $t->type_donneur }}
                                            </option>
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
                                        <input type="text" title="Entrer le nom du donneur" data-toggle="tooltip" id="nom" name="nom" class="form-control" value="{{ $donneur->nom }}" required="" placeholder="Nom donneur">

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
                                        <input type="text" title="Entrer le prénom du donneur" data-toggle="tooltip" id="prenom" name="prenom" class="form-control" value="{{ $donneur->prenom }}" required="" placeholder="Prénom donneur">
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
                                    <input type="text" title="Entrer la date de naissance du donneur" data-toggle="tooltip" name="date_naiss" class="form-control" value="{{ $donneur->date_naiss }}" required="" placeholder="Date de naissance">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                        <input type="text" title="Entrer le lieu de naissance du donneur" data-toggle="tooltip" id="" name="lieu_naiss" class="form-control" value="{{ $donneur->lieu_naiss }}" required="" placeholder="Lieu de naissance">
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
                                        <input type="radio" id="sexe" name="sexe" value="{{ $donneur->sexe }}"><i class="helper"></i> Homme
                                      </label>
                                    </div>
                                    <div class="radio radiofill radio-inline">
                                       <label>
                                          <input type="radio" id="sexe" name="sexe" value="{{ $donneur->sexe }}"><i class="helper"></i> Femme
                                        </label>
                                    </div>
                                      @if($errors->has('sexe'))
                                            <p style="color: red">  {{ $errors->first('sexe')}} </p>
                                        @endif
                                </div>
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                <select name="situation_mat_id" title="Entrer la situation matrimonial du donneur" data-toggle="tooltip" id="situation_mat_id" class="form-control">
                                    @foreach($ps as $p)
                                        <option value="{{ $p->id }}" @if($p->id == $donneur->typedonneur_id) {{ 'selected' }} @endif>
                                            {{ $p->situation_matrimoniale }}
                                        </option>
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
                                    <input type="text" title="Entrer la nationalité du donneur" data-toggle="tooltip" id="" name="nationalite" value="{{ $donneur->nationalite }}" class="form-control" required="" placeholder="Nationalité">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                        <input type="text" title="Entrer l'adresse du donneur" data-toggle="tooltip" id="adresse" name="adresse" class="form-control" value="{{ $donneur->adresse }}" required="" placeholder="Adresse domicile">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                        <input type="text" title="Entrer la profession du donneur" data-toggle="tooltip" id="" name="profession" class="form-control" value="{{ $donneur->profession }}" required="" placeholder="Profession">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                    <select name="organisation_id" name="organisation_id" title="Entrer l'organisation du donneur" data-toggle="tooltip" id="organisation_id" class="form-control">
                                        @foreach($os as $o)
                                            <option value="{{ $o->id }}" @if($o->id == $donneur->organisation_id) {{ 'selected' }} @else {{ '' }} @endif>
                                               {{ $o->libelle }}
                                            </option>
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
                                    <input type="email" title="Entrer l'email du donneur" data-toggle="tooltip" id="" name="email" value="{{ $donneur->email }}" class="form-control" required="" placeholder="Adresse mail">
                            </div>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                        <input type="text" title="Entrer le numéro de téléphone du donneur" data-toggle="tooltip" id="telephone" name="telephone" value="{{ $donneur->telephone }}" class="form-control" required="" placeholder="Téléphone">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="text-center">
                     <a href="{{ route('donneurs.index') }}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
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



