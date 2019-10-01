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
                    {{ ('Modification d\'une demande de sang') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
 <form id="main" method="post" action="{{ route('demande.demandeupdate', $demande) }}" novalidate="">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
    <div class="auth-box card">
        <div class="card-block">
            <div class="row m-b-30">
                <div class="notifications">
                        @if(session('error'))
                        <button class="btn btn-danger waves-effect" data-type="danger" data-from="top" data-align="right" data-animation-in="animated bounceIn" data-animation-out="animated bounceOut">{{ session('error') }}</button>
                        @endif
                   </div>
            </div>
             <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                            <input type="date" title="Date de la demande" data-toggle="tooltip" class="form-control" value="{{ $demande->date }}" name="date" id="date" placeholder="Date et Heure">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <select class="form-control select2" title="sélectionner le bénéficaire" data)toogle="tooltip" name="libelle">
                                @foreach($beneficiaires as $beneficiaire)
                                    <option  title="Bénéficiaire" value="{{ $beneficiaire->libelle }}" @if($beneficiaire->id == $demande->beneficiaire_id) {{ 'selected' }} @endif>{{ $beneficiaire->libelle }}</option>
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
                                <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                <input type="text" title="Téléphone Bénéficiaire" data-toggle="tooltip"  value="{{ $demande->beneficiaire->telephone}}" class="form-control phone" data-mask="9999-99-99-99-99" id="telephone" name="telephone" placeholder="Telephone">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                <input type="email" title="Email du Bénéficiaire" data-toggle="tooltip" class="form-control" value="{{ $demande->beneficiaire->email}}" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                <input type="text" title="Adresse du Bénéficiaire" data-toggle="tooltip" class="form-control" value="{{ $demande->beneficiaire->adresse }}" id="adresse" name="adresse" placeholder="Adresse">
                            </div>
                        </div>
                     </div>
                </div>
            <div class="text-center">
                <a href="{{  route('demande.index')}}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
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


