@extends('layouts.site')

@section('title', 'home')

@section('content')
    <div class="slider-area">
        <div class="slider-active owl-carousel">
            <div class="single-slider slider-height-2 bg-img align-items-center d-flex slider-overlay2-1 default-overlay" style="background-image:url({{ asset('assets/img/slider/bg-img.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="slider-content slider-content-2 slider-animated-2 text-center">
                                <h1 class="animated">Bienvenue à l'Université Henri Lopes de {{ env('APP_VILLE', 'Brazzaville') }} </h1>
                                <p class="animated">Nous continuons là où les autres s'arrêtent ! Apprendre pour entreprendre, c'est la clé du succès.</p>
                                <div class="slider-btn">
                                    <a class="animated default-btn btn-green-color" href="{{ route('about')}}">A propos de nous</a>
                                    <a class="animated default-btn btn-white-color" href="{{ route('contact')}}">Contactez-nous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height-2 align-items-center d-flex bg-img slider-overlay2-2 default-overlay" style="background-image:url(assets/img/slider/4.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="slider-content slider-content-2 slider-animated-2 text-center">
                                <h1 class="animated">Welcome to Glaxdu</h1>
                                <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                                <div class="slider-btn">
                                    <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                    <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height-2 align-items-center d-flex bg-img slider-overlay2-3 default-overlay" style="background-image:url(assets/img/slider/bg4.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="slider-content slider-content-2 slider-animated-2 text-center">
                                <h1 class="animated">Welcome to Glaxdu</h1>
                                <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                                <div class="slider-btn">
                                    <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                    <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="choose-us section-padding-1">
        <div class="container-fluid">
            <div class="row no-gutters choose-negative-mrg">
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-light-blue">
                        <div class="choose-img">
                            <img class="animated" src="assets/img/icon-img/service-1.png" alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Scholarship Facility</h3>
                            <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-yellow">
                        <div class="choose-img">
                            <img class="animated" src="assets/img/icon-img/service-2.png" alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Scholarship Facility</h3>
                            <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-blue">
                        <div class="choose-img">
                            <img class="animated" src="assets/img/icon-img/service-3.png" alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Scholarship Facility</h3>
                            <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-green">
                        <div class="choose-img">
                            <img class="animated" src="assets/img/icon-img/service-4.png" alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Scholarship Facility</h3>
                            <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <div class="about-us pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>Notre Université</h2>
                            <p>Créé en 2002 l'Université Henri Lopes est un établissement privé d'enseignement supérieur agrée par l'État.</p>
                        </div>
                        <p>Nous facilitons l’insertion des étudiants vers le monde de l'emploi en leur offrant une gamme des options ou filières du monde moderne.</p>
                        <div class="about-btn mt-45">
                            <a class="default-btn" href="{{ route('about') }}">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-img">
                        <video  width="569" height="381" preload="auto" controls>
                            <source src="{{ asset('assets/img/video/uhl1.mp4') }}">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="course-area bg-img pt-130 pb-10" style="background-image:url({{ asset('assets/img/bg/bg-1.webp') }});">
        <div class="container">
            <div class="section-title mb-75">
                <h2> <span>Nos</span> Formations</h2>
                <p>Nous disposons d'une gamme de produits adapter au besoin de nos enfants <br>des filières du monde numérique et bien d'autres.</p>
            </div>
            <div class="course-slider-active nav-style-1 owl-carousel">
                @foreach ($formations as $formation)
                @include('formations._card')
                @endforeach
            </div>
        </div>
    </div>
    <div class="achievement-area pt-130 pb-115">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Statistiques 2021 <span>D'UHL Brazzaville</span></h2>
                <p>Voici quelque listing de nos statistiques et de nos appréciations tant localement et internationalement.</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-one">
                        <div class="count-img">
                            <img src="assets/img/icon-img/achieve-1.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">515</h2>
                            <span>Étudiants</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-two">
                        <div class="count-img">
                            <img src="assets/img/icon-img/achieve-2.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">20</h2>
                            <span>Diplômés</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-three">
                        <div class="count-img">
                            <img src="assets/img/icon-img/achieve-3.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">5</h2>
                            <span>Primés</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-four">
                        <div class="count-img">
                            <img src="assets/img/icon-img/achieve-4.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">2</h2>
                            <span>Facultés</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-wrap mt-45">
                <div class="testimonial-text-slider">
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{ asset('assets/img/testimonial/ling.jpeg') }}">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                    <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Nous avons entendu des rumeurs stipulant que notre Université Henri Lopes n'était pas agrée par l'état et que tous les diplômes qui était élaborés n'était pas reconnus, mais à présent nous sommes rassurés d'apprendre que notre école dispose d'un agrément définitif et que ces diplômes sont reconnus. Nous sommes rassurés UHL. toujours likolo.</p>
                                    <div class="testi-info">
                                    <h5>Ling BITEMO</h5>
                                    <span>Etudiante en LICENCE 3</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="" src="{{ asset('assets/img/icon-img/testi-icon.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                    <div class="testi-big-img">
                            <img alt="" src="{{ asset('assets/img/testimonial/rhonnel.jpeg') }}">
                        </div>
                        <div class="row no-gutters">
                                <div class="ml-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                    <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>J'étais inquiet suite à la formation que j'allais recevoir et aussi si le diplôme que j'allais recevoir était adapter au monde de l'emploi. Mais mes inquiétudes était infondées. Aujourd'hui je travail en qualité de développeur Informatique, dans une structure de la place.</p>
                                    <div class="testi-info">
                                    <h5>Rhonnel MAMPASSI</h5>
                                    <span>Développeur Informatique chez IT-Medicalis</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="icone témoignage" src="{{ asset('assets/img/icon-img/testi-icon.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{ asset('assets/img/testimonial/marcelle.jpg') }}">
                        </div>
                        <div class="row no-gutters">
                                <div class="ml-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('assets/img/bg/testi.png') }});">
                                        <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p>Aujourd'hui moi aussi je suis contente de la formation que j'ai réçu à L'Université Henri Lopes en Banques et Finance je travail à BGFI BANK en qualité d'experte financière. </p>
                                        <div class="testi-info">
                                        <h5>BIAMOU Saida marcelle</h5>
                                        <span>Experte financier</span>
                                        </div>
                                        <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                        </div>
                                        <div class="testi-arrow">
                                            <img alt="" src="assets/img/icon-img/testi-icon.png">
                                        </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-image-slider">
                    <div class="sin-testi-image">
                        <img src="{{ asset('assets/img/testimonial/img-s2.jpg') }}" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{ asset('assets/img/testimonial/img_s1.jpg') }}" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{ asset('assets/img/testimonial/img-s3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="testimonial-text-img">
                <img alt="" src="{{ asset('assets/img/icon-img/testi-text.png') }}">
            </div>
        </div>
    </div>
    <div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url({{ asset('assets/img/bg/bg-3.webp') }});">
        <div class="container">
            <div class="section-title mb-75">
                <h2><span>Nos</span> Evénements</h2>
                <p>Calendrier des evements</p>
            </div>
            <div class="event-active owl-carousel nav-style-1">
                @foreach ($events as $event)
                    @include('events._card')
                @endforeach
            </div>
        </div>
    </div>
    <div class="blog-area pt-130 pb-100">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Nos <span>Actualités</span></h2>
                <p>Mettez-vous au courant des dernieres informations</p>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-lg-3 col-md-6">
                    @include('blog._post')
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection