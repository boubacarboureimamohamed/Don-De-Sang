@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">
    @php
         $color = 'pink';
    @endphp
   <div class="card bg-c-{{$color}}">
        <div class="card-header">
          <h3 class="text-center text-white">
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
                    {{ ('Modification d\'une Planification de collecte') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
 <form id="main" method="post" action="{{ route('rdvs.update', $rdv) }}" novalidate="">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
           <div class="auth-box card">
          <div class="card-block">
           <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                                <input type="text" class="form-control" title="date et heure du rdv" data-toggle="tooltip" name="date_heure" id="date_heure" value="{{ $rdv->date_heure }}" placeholder="Date et Heure">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                    <select id="typerdv_id" title="Type de rdv" data-toggle="tooltip" name="typerdv_id" class="form-control">
                                            @foreach( $typerdvs as $typerdv )
                                                <option value="{{ $typerdv->id }}" @if($typerdv->id == $rdv->typerdv_id) {{ 'selected' }} @endif>{{ $typerdv->type_rdv }}                                                </option>
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
                                <select class="form-control select2" title="organisation" data-toggle="tooltip" name="libelle">
                                        @foreach($organisations as $organisation)
                                            <option value="{{ $organisation->libelle }}" @if($organisation->id == $rdv->organisation_id) {{ 'selected' }} @endif>{{ $organisation->libelle }}</option>
                                        @endforeach
                                    </select>
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                <input type="text" class="form-control" title="lieu du rdv" data-toggle="tooltip" id="lieu" name="lieu" value="{{ $rdv->lieu }}" placeholder="Lieu de Rendez Vous">
                            </div>
                         </div>
                     </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                    <input type="email" class="form-control" title="Adresse mail de l'organisation" data-toggle="tooltip" id="email" name="email" value="{{ $rdv->organisation->email}}" placeholder="Email">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                    <input type="text" class="form-control phone" title="Numéro de téléphone de l'organisation" data-toggle="tooltip" data-mask="9999-99-99-99-99" id="telephone" name="telephone" value="{{ $rdv->organisation->telephone}}" placeholder="Telephone">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                    <input type="text" class="form-control" title="Adresse de l'organisation" data-toggle="tooltip" id="adresse" name="adresse" value="{{ $rdv->organisation->adresse }}" placeholder="Adresse">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="text-center">
                    <a href="{{  route('rdvs.rdv_fixe_liste')}}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
                    <button type="submit" class="btn btn-primary m-b-0">Modifier</button>
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
         </div>
      </div>
    </div>
</form>
</div>


@endsection

@section('js')
<script>

$(".select2").select2({

    tags: true

});
</script>
@endsection


