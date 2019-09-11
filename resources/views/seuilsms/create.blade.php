@extends('layouts.adminty')

@section('css')

    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/css/select2.min.css') }}">

@endsection

@section('content')

<div class="col-sm-12">
<!-- Inverse Image Caps card start -->
    <div class="row users-card">
        <div class="col-lg-6">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Message</h5>
                </div>
            <form action="{{ route('seuilsms.store') }}" method="post">
            {{ csrf_field() }}
                <div class="card-block">
                    <div class="top-cap-text">
                    <div class="row">
                    <div class="col-sm-12">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-envelope"></i></span>
                                <textarea name="message" id="" cols="60" title="entrez le message a envoyer" rows="2" placeholder="Ecrivez le message" ></textarea>
                            </div>
                               <h4 class="sub-title">Groupe Sanguin</h4>
                                <select id='custom-headers' class="searchable" name="groupe[]" multiple='multiple'>

                                    @foreach ($groupes as $groupe)
                                    <option value='{{ $groupe->id }}'>{{ $groupe->groupe_sanguin }}</option>
                                    @endforeach
                                                        
                                </select>
                            </div>
                     </div>
                     <div class="text-center">
                     <a href="" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
                        <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success']);">Envoyer le message</button>
            </form>  
                </div>
                </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-6">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Stock des poches de sang</h5>
                </div>
                <div class="card-block">
                    <div class="top-cap-text">
                        <div class="dt-responsive table-responsive">
                        <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Groupe Sanguin</th>
                            <th>Quantité en stock</th>
                            <th>Seuil</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stocks as $stock)
                            <tr>
                                <td>{{ $stock->groupe_sanguin }}</td>
                                <td>{{ $stock->quantite_reelle }}</td>
                                <td>{{ $stock->seuil }}</td>
                                 <td>
                                    <a href="#" class="btn btn-primary btn-outline-primary" style="float: none;margin: 5px;">
                                    <span class="icofont icofont-ui-edit"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of row -->
    <!-- Inverse Image Caps card end -->
</div>

@endsection

@section('js')
    <!-- Multiselect js -->
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.quicksearch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2-custom.js') }}"></script>

@endsection


