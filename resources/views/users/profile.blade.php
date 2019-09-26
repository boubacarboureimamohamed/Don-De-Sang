@extends('layouts.adminty')

@section('css')

    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/css/select2.min.css') }}">

@endsection

@section('content')

<div class="col-sm-12">
    <!-- Page-body start -->
    <div class="page-body">
        <!--profile cover start-->
        <div class="row">
            <div class="col-lg-12">
                <div class="cover-profile">
                    <div class="profile-bg-img">
                        <img class="profile-bg-img img-fluid" src="{{ asset('images\user-profile\bg-img1.jpg') }}" alt="bg-img">
                        <div class="card-block user-info">
                            <div class="col-md-12">
                                <div class="media-left">
                                    <a href="#" class="profile-image">
                                        <img class="user-img img-radius" src="{{ asset('images\avatar-4.jpg') }}" alt="user-img">
                                    </a>
                                </div>
                                <div class="media-body row">
                                    <div class="col-lg-12">
                                        <div class="user-title">
                                            <h2>Mon Profile</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--profile cover end-->
        <div class="row">
            <div class="col-lg-12">
                <!-- tab header start -->
                <div class="tab-header card">
                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab" aria-expanded="true">Informations Personnelle</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab" aria-expanded="false">Services de l'utilisateur</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Mes Contacts</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">Commentaires</a>
                            <div class="slide"></div>
                        </li>
                    </ul>
                </div>
                <!-- tab header end -->

                <!-- tab content start -->
                <div class="tab-content">
                    <!-- tab panel personal start -->
                    <div class="tab-pane active" id="personal" role="tabpanel">
                        <!-- personal card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">A propos de l'utilisateur</h5>
                                <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                    <i class="icofont icofont-edit"></i>
                                </button>
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="general-info">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-6">
                                                        <div class="table-responsive">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Nom et Prénom</th>
                                                                        <td>{{ Auth::user()->name }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Date de naissance</th>
                                                                        <td>{{ Auth::user()->date_naiss }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Adresse</th>
                                                                        <td>{{ Auth::user()->adresse }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Profession</th>
                                                                        <td>{{ Auth::user()->profession }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                    <div class="col-lg-12 col-xl-6">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Email</th>
                                                                        <td><a href="#!"><span class="__cf_email__" data-cfemail="4206272f2d02273a232f322e276c212d2f">{{ Auth::user()->email }}</span></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Lieu de naissance</th>
                                                                        <td>{{ Auth::user()->lieu_naiss }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Téléphone</th>
                                                                        <td>{{ Auth::user()->telephone }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Sexe</th>
                                                                        <td>{{ Auth::user()->sexe }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                            <!-- end of general info -->
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->
                                <div class="edit-info">
                                <form method="POST" action="{{ route('users.updateperso', Auth::user()->id) }}" class="md-float-material form-material">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="general-info">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                        <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" required="" title="Votre Username" class="form-control" placeholder="Votre Username">
                                                                    </div>
                                                                </tr>
                                                                <tr>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                                                                        <input type="date" name="date_naiss" title="Votre Date de Naissance" value="{{ Auth::user()->date_naiss }}" class="form-control" required="" placeholder="Votre Date de Naissance">
                                                                    </div>
                                                                </tr>
                                                                <tr>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                        <input type="text" name="adresse" title="Votre Adresse" value="{{ Auth::user()->adresse }}" class="form-control" placeholder="Votre Adresse">
                                                                    </div>
                                                                </tr>
                                                                <tr>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-"></i></span>
                                                                        <input type="text" class="form-control" name="profession" value="{{ Auth::user()->profession }}" title="Votre Profession" required="" placeholder="Votre Profession">
                                                                    </div>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-envelope"></i></span>
                                                                        <input id="email" type="email" title="Votre Adresse Mail" name="email" required="" value="{{ Auth::user()->email }}" class="form-control" placeholder="Votre Adresse Mail">
                                                                    </div>
                                                                </tr>
                                                                <tr>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                        <input type="text" title="Votre Lieu de Naissance" name="lieu_naiss" value="{{ Auth::user()->lieu_naiss }}" class="form-control" placeholder="Votre Lieu de Naissance">
                                                                    </div>
                                                                </tr>
                                                                <tr>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                        <input type="text" title="Votre Numéro de Téléphone" name="telephone" value="{{ Auth::user()->telephone }}" class="form-control" placeholder="Votre Numéro de Téléphone">
                                                                    </div>
                                                                </tr>
                                                                <tr>
                                                                    <div class="form-radio">
                                                                        <div class="group-add-on">
                                                                            <div class="radio radiofill radio-inline">
                                                                                <label>
                                                                                    <input type="radio" name="sexe" value="Homme"><i class="helper"></i> Homme
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill radio-inline">
                                                                                <label>
                                                                                    <input type="radio" name="sexe" value="Femme"><i class="helper"></i> Femme
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                </div>
                                                <!-- end of row -->
                                                <div class="text-center">
                                                    <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
                                                    <button type="submit" class="btn btn-primary ">
                                                        {{ ('Modifier') }}
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- end of edit info -->
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                    </form>
                                </div>
                                <!-- end of edit-info -->
                            </div>
                            <!-- end of card-block -->
                        </div>
                        <!-- personal card end-->
                    </div>
                    <!-- tab pane personal end -->
                    <!-- tab pane info start -->
                    <div class="tab-pane" id="binfo" role="tabpanel">
                        <!-- info card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Les sevices attribués</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card b-l-danger business-info services">
                                            <div class="card-header">
                                                <div class="service-header">
                                                    <a href="#">
                                                        <h5 class="card-header-text">Rôles</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p class="task-detail">Monsieur {{ Auth::user()->name }},<br> Vous avez le rôle d'un
                                                                @foreach (Auth::user()->roles as $role)
                                                                    {{ $role->name }}<br>
                                                                @endforeach
                                                                Avec les permissions suivantes qui vous sont attribuées :
                                                            </p>
                                                    </div>
                                                    <!-- end of col-sm-8 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                            <!-- end of card-block -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card b-l-danger business-info services">
                                            <div class="card-header">
                                                <div class="service-header">
                                                    <a href="#">
                                                        <h5 class="card-header-text">Permissions</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p class="task-detail">
                                                            @foreach (Auth::user()->roles->first()->permissions as $permission)
                                                                <button class="btn btn-primary btn-round btn-mini">
                                                                    {{ $permission->name  }}
                                                                </button>
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                    <!-- end of col-sm-8 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                            <!-- end of card-block -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- info card end -->
                    </div>
                    <!-- tab pane info end -->
                    <!-- tab pane contact start -->
                    <div class="tab-pane" id="contacts" role="tabpanel">
                    <!-- contact data table card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Liste de mes contacts</h5>
                        </div>
                        <div class="card-block contact-details">
                            <div class="table-responsive">
                                <table id="example-2" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nom et Prénom</th>
                                            <th>Email</th>
                                            <th>Téléphone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>9989988988</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- contact data table card end -->
                    </div>
                    <!-- tab pane contact end -->
                    <div class="tab-pane" id="review" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">A propos de la plateforme</h5>
                            </div>
                            <div class="card-block">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
                                and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
                                    No one rejects, dislikes,or avoids pleasure itself, because it is pleasure, but because
                                those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                                but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                                which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab content end -->
            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>

@endsection

@section('js')

    <!-- Multiselect js -->
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.quicksearch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2-custom.js') }}"></script>
    <script src="{{ asset('js/user-profile.js') }}"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/ckeditor/ckeditor-custom.js') }}"></script>

@endsection
