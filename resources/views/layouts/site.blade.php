<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'UHL') | {{ config('app.name', 'UHL') }}</title>
    <meta name="description" content="{{ $page->meta_description ?? '' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon4.jpg')}}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    @yield('styles')
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
        .header-top:before {
            background-color: #bf9515;
        }
        .main-menu nav ul li a {
            line-height: 70px;
        }
        .mean-container a.meanmenu-reveal {
            top: -50px;
        }
        @media only screen and (max-width: 767px) {
            .header-bottom {
                padding: 0;
            } 
        }
    </style>
</head>

<body>
<header class="header-area">
    <div class="header-top bg-img" style=" background-image:url({{ asset('assets/img/icon-img/header-shape.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +242 06 950 36 86 /  +242 06 734 97 60</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:contact@uhl.cg">contact@uhl.cg</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            <li><a href="#">Mon portail</a></li>
                            <li><a href="#">Intranet</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo mt-0">
                        <a href="{{ route('/') }}">
                            <img alt="" src="{{ asset('assets/img/logo/logo.jpg') }}"  height="70">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    @include('layouts.nav_link')
                                </ul>
                            </nav>
                        </div>
                        <div class="cart-search-wrap d-none">
                            <div class="header-search">
                                <button class="search-toggle">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search-content">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button>
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            @include('layouts.nav_link')
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Contenu de la page -->
@yield('content')
<footer class="footer-area">
    <div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url({{ asset('assets/img/bg/bg-uhl.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>UHL</h4>
                        </div>
                        <div class="footer-about">
                            <p>Créé en 2002 l'Université Henri Lopes est un établissement privé d'enseignement supérieur agrée par l'État.</p>
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="#">contact@uhl.cg</a></span>
                                </div>
                                <p class="m-2 font-weight-bold">UHL Brazzaville</p>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>28 Rue MBIEMO derriere la faculté de Droit Bacongo</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span>+242 06 950 36 86</span>
                                </div>
                                <p class="m-2 font-weight-bold">UHL Pointe-Noire</p>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>Rue Mboungou, Qtier Aeroport non loin de l'école notre dame de rosaire arrêt le george</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span>+242 06 734 97 60 / 05 533 61 07</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>LIEN RAPIDE</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="{{ route('/') }}">Accueil</a></li>
                                <li><a href="{{ route('about') }}">Notre Université</a></li>
                                <li><a href="{{ route('formation') }}">Formation</a></li>
                                <li><a href="{{ route('admission') }}">Admission</a></li>
                                <li><a href="#">Termes & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>Formations</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">Droit </a></li>
                                <li><a href="#">Informatique de gestion </a></li>
                                <li><a href="#">Logistique et transport</a></li>
                                <li><a href="#">Maitenance des ordinateurs </a></li>
                                <li><a href="#">Comptabilité et Gestion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>GALERIE</h4>
                        </div>
                        <div class="footer-gallery">
                            <ul>
                                <li><a href="#"><img src="{{ asset('assets/img/gallery/gallery-8.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/gallery/gallery-5.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/gallery/gallery-6.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/gallery/gallery-7.jpg')}}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>Newsletter</h4>
                        </div>
                        <div class="subscribe-style">
                            <p>Recevez des nouvelles et des actualités de nos différents produits et offres</p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder="Votre adresse email" name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Envoyer">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright © date par
                            <a href="#">ProTech</a>
                            . Tous droits reservés
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privecy & Policy</a></li>
                                <li><a href="#">Termes et conditions d’utilisation</a></li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            @include('partials.social')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield('js')
</body> 

</html>