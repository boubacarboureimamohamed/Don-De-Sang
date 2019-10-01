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
                    {{ ('Planifier une nouvelle collecte') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
        <form id="main" method="post" action="{{ route('rdvs.store')}}" novalidate="">
                            {{ csrf_field() }}

           <div class="auth-box card">
          <div class="card-block">
           <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                                <input type="datetime-local"class="form-control" value="{{ old('date_heure') }}" name="date_heure" title="Date et heure du RDV" data-toggle="tooltip" placeholder="Date et Heure">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                    <select name="typerdv_id" title="Type du RDV" data-toggle="tooltip" id="typerdv_id" value="{{ old('typerdv_id') }}" class="form-control">
                                            @foreach($typerdvs as $typerdv)
                                                <option value="{{ $typerdv->id }}">{{ $typerdv->type_rdv }}</option>
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
                                <select class="form-control select2" title="Organisation" data-toggle="tooltip" value="{{ old('libelle') }}" name="libelle">
                                            @foreach($organisations as $organisation)
                                                <option value="{{ $organisation->libelle }}">{{ $organisation->libelle }}</option>
                                            @endforeach
                                </select>
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                <input type="text" class="form-control" title="Lieu du RDV" data-toggle="tooltip" value="{{ old('lieu') }}" id="lieu" name="lieu" placeholder="Lieu de Rendez Vous">
                            </div>
                         </div>
                     </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                    <input type="email" class="form-control" title="Adresse mail de l'organisation" data-toggle="tooltip" value="{{ old('email') }}" id="email" name="email" placeholder="Email">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                    <input type="text" class="form-control phone" title="Numéro de téléphone" data-toggle="tooltip" value="{{ old('telephone') }}" data-mask="9999-99-99-99-99" id="telephone" name="telephone" placeholder="Telephone">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                    <input type="text" class="form-control" title="Adresse de l'organisation" data-toggle="tooltip" value="{{ old('adresse') }}" id="adresse" name="adresse" placeholder="Adresse">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="text-center">
                    <a href="{{  route('rdvs.index')}}" id="edit-cancel" class="btn btn-default">Annuler</a>
                    <button type="submit"  class="btn btn-primary">Enregistrer</button>
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


