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

<div class="container">
        <form role="form" action="{{ route('donneurs.store') }}" method="POST">
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="j-label">Numéro donneur</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
                                    <i class="icofont icofont-ui-password"></i>
                                </label>
                                <input type="text" id="num_donneur" name="num_donneur">
                            </div>
                            @if($errors->has('num_donneur'))
                                <p style="color: red">  {{ $errors->first('num_donneur')}} </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="j-label">Nom</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
                                    <i class="icofont icofont-ui-user"></i>
                                </label>
                                <input type="text" id="nom" name="nom">
                            </div>
                            @if($errors->has('nom'))
                                <p style="color: red">  {{ $errors->first('nom')}} </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="j-label">Prénom</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
                                    <i class="icofont icofont-ui-user"></i>
                                </label>
                                <input type="text" id="prenom" name="prenom">
                            </div>
                            @if($errors->has('prenom'))
                                <p style="color: red">  {{ $errors->first('prenom')}} </p>
                            @endif
                        </div>
                        <div lass="form-group">
                            <label class="j-label">Email</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
                                        <i class="icofont icofont-envelope"></i>
                                </label>
                                <input type="email" id="" name="email">
                            </div>
                        </div>
                        <div lass="form-group">
                            <label class="j-label">Phone/Mobile</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="phone">
                                    <i class="icofont icofont-phone"></i>
                                </label>
                                <input type="text" id="telephone" name="telephone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="j-label">Date de naissance</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="adults">
                                        <i class="icofont icofont-ui-calendar"></i>
                                </label>
                                <input id="dropper-dangercolor" class="form-control" type="text" name="date_naiss" placeholder="Select your animation">
                                <span class="j-tooltip j-tooltip-right-top">Date de naissance</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="j-label">Lieu de naissance</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="children">
                                    <i class="zmdi zmdi-pin"></i>
                                </label>
                                <input type="text" id="" name="lieu_naiss">
                                <span class="j-tooltip j-tooltip-right-top">Lieu de naissance</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="j-label">Nationnalite</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="date_from">
                                    <i class="icofont icofont-ui-calendar"></i>
                                </label>
                                <input type="text" id="" name="nationalite">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="j-label">Profession</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="date_to">
                                    <i class="icofont icofont-ui-calendar"></i>
                                </label>
                                <input type="text" id="" name="profession">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="j-label">Sexe</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
                                    <i class="fa fa-venus-mars"></i>
                                </label>
                                <input type="text" id="sexe" name="sexe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="j-label">Type donneur</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
                                    <i class="fa fa-venus-mars"></i>
                                </label>
                                <select name="typedonneur_id" id="typedonneur_id" class="form-control">
                                    @foreach($ts as $t)
                                    <option value="{{ $t->id }}">
                                    {{ $t->type_donneur }}
                                    </option>
                                    @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="j-label">Situation matrimoniale</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
                                    <i class="fa fa-venus-mars"></i>
                                </label>
                                <select name="situation_mat_id" id="situation_mat_id" class="form-control">
                                    @foreach($ps as $p)
                                    <option value="{{ $p->id }}">
                                    {{ $p->situation_matrimoniale }}
                                    </option>
                                    @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="j-label">Adresse</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
                                    <i class="icofont icofont-ui-user"></i>
                                </label>
                                <input type="text" id="adresse" name="adresse">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="j-label">Organisation</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
                                    <i class="icofont icofont-ui-user"></i>
                                </label>
                                <select name="organisation_id" id="typedonneur" class="form-control">
                                    @foreach($os as $o)
                                    <option value="{{ $o->id }}">
                                    {{ $o->libelle }}
                                    </option>
                                    @endforeach
                              </select>
                            </div>
                        </div>
                        <button type="Submit" class="btn btn-success alert-success-msg m-b-10" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success']);">Success</button>
                        {{-- <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button> --}}
                    </div>
                </div>
            </div>
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



