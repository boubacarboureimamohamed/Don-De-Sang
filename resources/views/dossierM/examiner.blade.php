@extends('layouts.adminty')
@section('css')

  <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\demo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\j-pro-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\advance-elements\css\bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\bootstrap-daterangepicker\css\daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\datedropper\css\datedropper.min.css') }}">

    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\sweetalert\css\sweetalert.css') }}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css\component.css') }}">
@endsection
@section('content')

<div class="row">
    <form role="form" action="{{ route('dossierM.store') }}" method="POST">
        <div class="tab-pane active" id="personal" role="tabpanel">
            <div class="col-lg-12">
                <div class="general-info">
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table">
                                <tbody>
                                        <input type="text"value="{{ $donneur->id }}"name="donneur_id" hidden>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                <input type="text" class="form-control" value="{{ $donneur->nom }}" placeholder="{{ $donneur->nom }}" readonly="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-key"></i></span>
                                                <input type="text" class="form-control" value="{{ $donneur->num_donneur }}" placeholder="{{ $donneur->nom }}" readonly="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-radio">
                                                <div class="group-add-on">
                                                    <div class="radio radiofill radio-inline">
                                                        <label>
                                                            <input type="radio" value="1" name="approbation" checked=""><i class="helper"></i> Apte
                                                        </label>
                                                    </div>
                                                    <div class="radio radiofill radio-inline">
                                                        <label>
                                                            <input type="radio" value="0" name="approbation"><i class="helper"></i> Inapte
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input id="dropper-default" class="form-control" type="text" placeholder="Date dossier medical" name="date_dossier_medical">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-file-text"></i></span>
                                                <textarea placeholder="Comments" spellcheck="false" id="observation_approbation" name="observation_approbation"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-key"></i></span>
                                                <input type="text" class="form-control" placeholder="num_don" name="num_don">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end of table col-lg-6 -->
                        <div class="col-lg-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                <input type="text" class="form-control" value="{{ $donneur->prenom }}" readonly="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-ui-settings"></i></span>
                                                <input type="text" class="form-control" value="{{ $donneur->typedonneur->type_donneur }}" placeholder="{{ $donneur->nom }}" readonly="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                                <input type="text" class="form-control" placeholder="Poid" name="poid">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="icofont icofont-thermometer-alt"></i></span>
                                                <input type="text" class="form-control" placeholder="Température" name="temperature">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-heartbeat"></i></i></span>
                                                <input type="text" class="form-control" placeholder="Tension artérielle" name="tension_arterielle">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-laboratory"></i></span>
                                                <input type="text" class="form-control" placeholder="Quantité à prélevée" name="quantite_a_prelevee">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end of table col-lg-6 -->
                    </div>
                    <!-- end of row -->
                    <div class="text-center">
                            <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success']);">Enregistrer</button>
                        {{-- <a href="{{ route('dossierM.index') }}" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a> --}}
                    </div>
                </div>
                <!-- end of edit info -->
            </div>
        <!-- end of col-lg-12 -->
        @csrf
    </form>
    </div>
@endsection

@section('js')
 <!-- j-pro js -->
    <script type="text/javascript" src="{{ asset('js\j-pro\js\jquery.ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\j-pro\js\jquery.j-pro.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js\advance-elements\custom-picker.js') }}"></script>


    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="{{ asset('js\advance-elements\moment-with-locales.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components\bootstrap-datepicker\js\bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\advance-elements\bootstrap-datetimepicker.min.js') }}"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="{{ asset('bower_components\bootstrap-daterangepicker\js\daterangepicker.js') }}"></script>
    <!-- Date-dropper js -->

    <!-- sweet alert js -->
    <script type="text/javascript" src="{{ asset('bower_components\sweetalert\js\sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\modal.js') }}"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="{{ asset('assets\js\modalEffects.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets\js\classie.js') }}"></script>


@endsection



