@extends('layouts.site')

@section('title', $page->title)

@section('content')
@include('partials.breadcrumb')
<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="section-title-3 section-shape-hm2-1 text-center mb-100">
            <h2>Notre <span>Histoire</span></h2>
            <p>{!! $page->body !!}</p>
        </div>
        <div class="row align-items-center">
           <div class="col-lg-7 col-md-12">
                
                <div class="about-img">
                    <video  width="569" height="381" preload="auto" controls>
                        <source src="{{ asset('assets/img/video/uhl2.mp4') }}">
                    </video>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="about-content-2 pr-70">
                    <p>Créer le 25 Mars 2002 L'Université Henri Lopes est un établissement privé d'enseignement supérieur, agrée par l'Etat et dont les diplômes homologués par la fonction publique sont reconnus par la communauté académique nationale et Internationale.</p>
                    <img src="assets/img/banner/bg-2.jpg" alt="Doyen d'UHL">
                    {{-- <div class="signature mt-30">
                        <img src="assets/img/icon-img/signature.png" alt="">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="choose-us-area pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row"> 
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-choose-us2 mb-45 text-center">
                            <img src="assets/img/icon-img/service-5.png" alt="">
                            <h4>Créativité & Technologie</h4>
                            <p>Nous disposons des filieres technologique<br> pour la nouvelle generation.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-choose-us2 mb-45 text-center choose-padding">
                            <img src="assets/img/icon-img/service-6.png" alt="">
                            <h4>17 Ans d'experience</h4>
                            <p>Ce complexe est nanti d’une expérience qui fait de lui un cadre idéal d’apprentissage et un site privilégié dans le cadre de la formation professionnalisante.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-choose-us2 mb-45 text-center">
                            <img src="assets/img/icon-img/service-7.png" alt="">
                            <h4>Droit & Gestion</h4>
                            <p>Dans le domaine juridique et de la gestion, nous formons aussi des élites.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-choose-us2 mb-45 text-center choose-padding">
                            <img src="assets/img/icon-img/service-8.png" alt="">
                            <h4>Economie & Management</h4>
                            <p>Nous formons aussi dans les metiers de l'economie<br>et au management.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-newsletter text-center ml-40">
                    <h4>CONNECTEZ SUR NEWSLETTER</h4>
                    <p>Recevez des nouvelles et des actualités de nos différents produits et offres </p>
                    <form>
                        <input name="name" placeholder="E-mail" type="text">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button class="submit" type="submit">Soumettre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="video-area bg-img pt-270 pb-270" style="background-image:url(assets/img/banner/1.jpg);">
    <div class="video-btn-2">
        <a class="" href="#">
            <img class="animated" src="assets/img/icon-img/viddeo-btn.png" alt="">
        </a>
    </div>
</div>
<div class="teacher-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Quelques <span>Enseignants</span></h2>
            <p>Face aux faiblesses de tous ordre de l’enseignement supérieur, le rôle du secteur privé pour<br> appuyer le secteur public dans l’amélioration du rendement est devenu incontournable.  </p>
        </div>
        <div class="custom-row">
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="{{ asset('assets/img/teacher/Scrutin.jpg')}}" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Scrutin<br>MAVOUNGOU</h4>
                        <h5>Ing. Informatique</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Scrutin MAVOUNGOU</h4>
                            <h5>Ing. Informatique</h5>
                            <p></p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="{{ asset('assets/img/teacher/alain.jpeg')}}" height="256" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Alain LOUEKO</h4>
                        <h5>expert GRH</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Alain LOUEKO</h4>
                            <h5>expert GRH</h5>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="{{ asset('assets/img/teacher/yocoyoco1.jpg')}}" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>YOCO<br>YOCO</h4>
                        <h5>Analyste<br> Developpeur</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>YOCO YOCO</h4>
                            <h5>Analyste  Developpeur</h5>
                            <p>Analyste des systèmes d'information.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="{{ asset('assets/img/teacher/rodri1.jpg')}}" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>NGAKOSSO<br>Rodriguez</h4>
                        <h5>Developpeur</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>NGAKOSSO<br>Rodriguez</h4>
                            <h5>Developpeur</h5>
                            <p>Administrateur réseau et de Gestion de base de données.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="{{ asset('assets/img/teacher/MBANI-Loth.jpg')}}" height="256" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>MBANI Loth</h4>
                        <h5>Mathématique financière</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>MBANI Loth</h4>
                            <h5>Mathématique financière</h5>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="{{ asset('assets/img/teacher/ong.jpg')}}" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Romarick<br>OKEMBA</h4>
                        <h5>Developpeur</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Romarick OKEMBA</h4>
                            <h5>Developpeur</h5>
                            <p>Developpeur en JAVA.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>
<div class="fun-fact-area bg-img pt-130 pb-100" style="background-image:url({{ asset('assets/img/bg/bg-6.webp')}});">
    <div class="container">
        <div class="section-title-3 section-shape-hm2-2 white-text text-center mb-100">
            <h2><span>Statistiques 2021 </span> D'UHL</h2>
            <p>Voici quelque listing de nos statistiques et de nos appréciations<br> tant localement et internationalement.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">515</h2>
                        <span>Étudiants</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">400</h2>
                        <span>Diplômés</span>
                    </div>
                </div>
            </div> 
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">50</h2>
                        <span>Primés</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">2</h2>
                        <span>Facultés</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Ce que <span>les gens disent</span></h2>
            <p>Témoignage des anciens etudiants</p>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="{{ asset('assets/img/testimonial/ling.jpeg') }}">
                    </div>
                    <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-12">
                            <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('assets/img/bg/testi.webp')}});">
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
                            <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('assets/img/bg/testi.webp')}});">
                                <div class="quote-style quote-left">
                                <i class="fa fa-quote-left"></i>
                                </div>
                                <p>J'étais inquiet suite à la formation que j'allais recevoir et aussi si le diplôme que j'allais recevoir était adapter au monde de l'emploi. Mais mes inquiétudes était infondés. Aujourd'hui je travail en qualité de développeur Informatique, dans une structure de la place.</p>
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
                                <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('assets/img/bg/testi.webp')}});">
                                    <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Aujourd'hui moi aussi je suis contente, de la formation que j'ai réçu à Henri-Lopes en Banques et Finance je travail à BGFI BANK en qualité d'experte financière. </p>
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
@include('partials.brandlogoarea')
@endsection