@extends('layouts.adminty')

@section('css')

    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/css/select2.min.css') }}">

@endsection

@section('content')

<form method="post" action="{{ route('validation.updateseuil', $groupement) }}" id="form">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="Modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Modification du seuil d'un goupe saguin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-"></i></span>
                            <input title="Groupe sanguin" type="text" name="groupe_sanguin" id="groupe_sanguin" readonly="" value="{{ $groupement->groupe_sanguin }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                            <input title="modifier le seuil du groupe sanguin" type="text" name="seuil" id="seuil" value="{{ $groupement->seuil }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button  class="btn btn-primary" id="ajaxSubmit">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@section('js')
    <!-- Multiselect js -->
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.quicksearch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2-custom.js') }}"></script>

@endsection

