@extends('layouts.site')

@section('title', $page->title)

@section('content')
@include('partials.breadcrumb')
<div class="teacher-area pt-130 pb-100">
    <div class="container">
        <div class="section-title-3 section-shape-hm2-1 text-center mb-100">
            <h2>Equipe dirigeante <span>UHL Brazzaville</span></h2>
        </div>
        <div class="custom-row">
            <div class="custom-col-5 ">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="{{ asset('assets/img/teacher/pdg.jpeg')}}" height="270" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Dr. Joadel<br>ELONGO</h4>
                        <h5>PDG</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Dr. Joadel ELONGO</h4>
                            <h5>PDG</h5>
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
            <div class="custom-col-5 ">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="{{ asset('assets/img/teacher/doyen.jpg')}}" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Dr. Marcel<br>MABOUNDA<br>BISSILA</h4>
                        <h5>Doyen</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Dr. Marcel MABOUNDA BISSILA</h4>
                            <h5>Doyen</h5>
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
            <div class="custom-col-5 ">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="{{ asset('assets/img/teacher/nadege1.jpg')}}" height="256" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Dr. Maria Nadège<br>SAMBA VOUKA</h4>
                        <h5>Vice Doyenne</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Dr. Maria Nadège SAMBA VOUKA</h4>
                            <h5>Vice Doyenne</h5>
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
                        <img src="{{ asset('assets/img/teacher/BOUNDZIKA.jpeg')}}" height="270" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Bonaventure<br>BOUNDZIKA</h4>
                        <h5>Secrétaire Générale</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Bonaventure BOUNDZIKA</h4>
                            <h5>Secrétaire Générale</h5>
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
                        <img src="{{ asset('assets/img/teacher/MBANI-Loth.jpg')}}" height="256" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>MBANI Loth</h4>
                        <h5>Coordonnateur</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>MBANI Loth</h4>
                            <h5>Coordonnateur</h5>
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
        </div>
    </div>
</div>
@include('partials.brandlogoarea')
@endsection