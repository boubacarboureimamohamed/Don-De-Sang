@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">
 <form id="main" method="post" action="{{ route('demande.update', $demande) }}" novalidate="">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
    <div class="auth-box card">
        <div class="card-block">
            <div class="row m-b-30">
                <div class="col-md-12">
                    <h3 class="text-center txt-primary">{{ ('Modification d\'une Demande') }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                            <input type="text" class="form-control" name="date" id="date" value="{{ $demande->date }}" placeholder="Date et Heure">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <select class="form-control select2" name="libelle">
                                @foreach($beneficiaires as $beneficiaire)
                                    <option value="{{ $beneficiaire->libelle }}" @if($beneficiaire->id == $demande->beneficiaire_id) {{ 'selected' }} @endif>{{ $beneficiaire->libelle }}</option>
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
                            <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $demande->beneficiaire->email}}" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                            <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $demande->beneficiaire->telephone}}" placeholder="Telephone">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $demande->beneficiaire->adresse }}" placeholder="Adresse">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary m-b-0">Modifier</button>
                <a href="{{  route('demande.index')}}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
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


