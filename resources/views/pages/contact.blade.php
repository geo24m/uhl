@extends('layouts.site')

@section('title', $page->title)

@section('content')
@include('partials.breadcrumb')
<div class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1989.322770696066!2d15.254244800226935!3d-4.288871876368537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a33005c3f16bb%3A0x6261c00201b0f579!2sUniversit%C3%A9%20henri%20lopes%20bacongo!5e0!3m2!1sfr!2scg!4v1655045933071!5m2!1sfr!2scg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2>Contactez <span>Nous</span></h2>
                    </div>
                    <form id="contactForm" action="{{ route('contact_store') }}" method="post">
                        @csrf
                        <span class="invalid-feedback" role="alert" >
                            <strong id="nom-error"></strong>
                        </span>
                        <input name="nom" id="nom" placeholder="Nom*" type="text" class="form-control">
                        <span class="invalid-feedback" role="alert">
                            <strong id="email-error"></strong>
                        </span>
                        <input name="email" id="email" placeholder="Email*" type="email" class="form-control">
                        <span class="invalid-feedback" role="alert">
                            <strong id="objet-error"></strong>
                        </span>
                        <input name="objet" id="objet" placeholder="Objet*" type="text" class="form-control">
                        <span class="invalid-feedback" role="alert">
                            <strong id="message-error"></strong>
                        </span>
                        <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                        <button class="submit btn-style" id="contactBtn" type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-info-area bg-img pt-180 pb-140 default-overlay" style="background-image:url(assets/img/bg/contact-info.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    <p>BZ : 28 Rue MBIEMO derriere la faculté de Droit Bacongo <br>PN : Rue Mboungou, Qtier Aeroport non loin de l'école notre dame de rosaire arrêt le george</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    <div class="contact-info-phn">
                        <div class="info-phn-title">
                            <span>Brazzaville : </span>
                        </div>
                        <div class="info-phn-number">
                            <p>+242 06 950 36 86</p>
                        </div>
                    </div>
                    <div class="contact-info-phn">
                        <div class="info-phn-title">
                            <span>Pointe-noire : </span>
                        </div>
                        <div class="info-phn-number">
                            <p>+242 06 734 97 60 </p>
                            <p>+242 05 533 61 07</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    <a href="mailto:contact@uhl.cg">contact@uhl.cg</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.brandlogoarea')
@endsection

@section('js')
<script src="{{ asset('assets/js/contact.js') }}"></script>
@endsection