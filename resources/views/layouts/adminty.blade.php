<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Don-De-Sang') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('images/DDS/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('icon/icofont/css/icofont.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('icon/feather/css/feather.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('scss/partials/menu/_pcmenu.htm') }}">
    <!-- jquery-toast plugin js-->
    <link rel="stylesheet" href="{{ asset('toast/dist/jquery.toast.min.css') }}">
     <!-- Select2 -->
     <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/select2.min.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('icon/feather/css/feather.css') }}">
        <!-- Multi Select css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/multiselect/css/multi-select.css') }}">
    <!-- sweet alert framework-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/sweetalert/css/sweetalert2.min.css') }}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    @yield('css')
</head>

<body>
@yield('css')


<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>


<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
             <nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="theme2" pcoded-header-position="fixed"">
                <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="{{ route('home') }}">
                        <img class="img-fluid" src="{{ asset('images/DDS/logo.png') }}" alt="Theme-Logo">
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>

                     <ul class="nav-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                             <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('images\avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                <span>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </span>
                                <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="{{ route('profile') }}">
                                            <i class="feather icon-user"></i> {{ ('Mon profile') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="feather icon-log-out"></i>
                                        {{ __('Deconnexion') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                  </ul>
                                </div>
                            </li>
                        @endguest
                    </ul>
                   </div>
                </div>
             </nav>

             <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" navbar-theme="themelight1" active-item-theme="theme1" sub-item-theme="theme2" active-item-style="style0" pcoded-navbar-position="fixed">
                        <div class="pcoded-inner-navbar main-menu mCustomScrollbar _mCS_1" id="" style="height: calc(100% - 80px);">
                            <div class="pcoded-navigatio-lavel" menu-title-theme="theme5">
                                <span class="text-white">Navigation</span>
                            </div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <h5 class="card-footer bg-c-pink">
                                        <span class="text-white"><i class="feather icon-home"></i></span>
                                        <span class="text-white">Tableau de bord</span>
                                    </h5>
                                </li>
                                @role('Assistant Medical|Responsable Selection Médical')
                                <li class="pcoded-hasmenu">
                                    <a href="#!">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Gestion Des Donneurs</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        @role('Assistant Medical|Responsable Selection Médical')
                                        <li class=" ">
                                            <a href="{{ route('donneurs.index') }}">
                                                <span class="pcoded-mtext">Donneurs</span>
                                            </a>
                                        </li>
                                        @endrole
                                        @role('Responsable Selection Médical')
                                        <li class="">
                                            <a href="{{ route('dossierM.donneursexaminer') }}">
                                                <span class="pcoded-mtext">Donneurs Examinés</span>
                                            </a>
                                        </li>
                                        @endrole
                                    </ul>
                                </li>
                                @endrole
                                @role('Assistant Medical')
                                <li class="pcoded-hasmenu">
                                    <a href="#!">
                                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Planification Des Collectes</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="{{ route('rdvs.rdv_fixe_liste')}}">
                                                <span class="pcoded-mtext">Collectes Fixes</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('rdvs.rdv_mobile_liste')}}">
                                                <span class="pcoded-mtext">Collectes Mobiles</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endrole
                                @role('Responsable Selection Médical')
                                <li class="">
                                    <a href="{{ route('dossierM.dossiermedical')}}">
                                        <span class="pcoded-micon"><i class="feather icon-folder"></i></span>
                                        <span class="pcoded-mtext">Dossiers Médicaux</span>
                                    </a>
                                </li>
                                @endrole
                                @role('Preleveur|Laborantin')
                                <li class="pcoded-hasmenu">
                                    <a href="#!">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Gestion Des Prélèvements</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        @role('Preleveur')
                                        <li class="">
                                            <a href="{{ route('prelevement.donneur_apte_a_prelevee') }}">
                                                <span class="pcoded-mtext">Liste d'attente</span>
                                            </a>
                                        </li>
                                        @endrole
                                        @role('Preleveur|Laborantin')
                                        <li class=" ">
                                            <a href="{{ route('prelevement.donneur_prelevee') }}">
                                                <span class="pcoded-mtext">Liste Des Prélèvements</span>
                                            </a>
                                        </li>
                                        @endrole
                                    </ul>
                                </li>
                                @endrole
                                @role('Laborantin')
                                <li class="">
                                    <a href="{{ route('validation.donneur_valider') }}">
                                        <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                                        <span class="pcoded-mtext">Gestion Des Dons</span>
                                    </a>
                                </li>
                                @endrole
                                @role('Laborantin')
                                <li class="">
                                    <a href="{{ route('validation.stock') }}">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Banque De Sang</span>
                                    </a>
                                </li>
                                @endrole
                                @role('Assistant Medical|Laborantin')
                                <li class="">
                                    <a href="{{ route('demande.index') }}">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Demande De Sang</span>
                                    </a>
                                </li>
                                @endrole
                                @role('Admin')
                                <li class="pcoded-hasmenu">
                                    <a href="#!">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></i></span>
                                        <span class="pcoded-mtext">Utilisateurs Et Rôles</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('users.index') }}">
                                                <span class="pcoded-mtext">Les utilisateurs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route('roles.index') }}">
                                                <span class="pcoded-mtext">Les rôles</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endrole
                                @role('Admin')
                                <li class="">
                                    <a href="{{ route('validation.indexgroupage') }}">
                                        <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                        <span class="pcoded-mtext">Paramétrages</span>
                                    </a>
                                </li>
                                @endrole
                                @role('Admin')
                                <li class="">
                                    <a href="{{ route('seuilsms.create') }}">
                                        <span class="pcoded-micon"><i class="feather icon-mail"></i></span>
                                        <span class="pcoded-mtext">Notifications</span>
                                    </a>
                                </li>
                                @endrole
                            </ul>
                     </nav>

                     <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            @yield('content')

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>

                </div>
             </div>
        </div>
    </div>
</div>

<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/modernizr/js/css-scrollbars.js') }}"></script>

    <!-- modalEffects js nifty modal window effects -->
<script src="{{ asset('js/modalEffects.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<!-- sweet alert js-->
<script type="text/javascript" src="{{ asset('bower_components/sweetalert/js/sweetalert2.min.js') }}"></script>


  <!-- data-table js -->
    <script type="text/javascript" src="{{ asset('bower_components/data-table/js/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/data-table/js/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/data-table/js/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net-buttonsjs/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net-buttonsjs/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net-buttonsjs/js/dataTables.buttons.min.js') }}"></script>

<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('bower_components/i18next/js/i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
<!-- Custom js -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/pcoded.min.js') }}"></script>
<script src="{{ asset('js/vartical-layout.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- jquery-toast plugin js-->
<script src="{{ asset('toast/dist/jquery.toast.min.js') }}"></script>
@include('flash-message')

 <!-- Multiselect js -->
 <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.quicksearch.js') }}"></script>
    <!-- select2 -->

    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2-custom.js') }}"></script>

         <!-- Masking js -->
    <script src="{{ asset('assets/pages/form-masking/inputmask.js') }}"></script>
    <script src="{{ asset('assets/pages/form-masking/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('assets/pages/form-masking/autoNumeric.js') }}"></script>
    <script src="{{ asset('assets/pages/form-masking/form-mask.js') }}"></script>







<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
@yield('js')
</body>

</html>
