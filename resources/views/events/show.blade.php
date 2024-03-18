@extends('layouts.site')

@section('title', 'Formation')

@section('content')

@include('partials.breadcrumb')
<?php setlocale(LC_TIME, 'fr_FR.UTF8'); ?>
<div class="event-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="event-left-wrap mr-40">
                    <div class="event-description">
                        <div class="description-date-social mb-45">
                            <div class="description-date-time">
                                <div class="description-date">
                                    <span class="event-date">{{ (new \DateTime($event->date))->format('d') }}</span>
                                    <span>{{ strftime('%B', strtotime((new \DateTime($event->date))->format('M'))) }}</span>
                                </div>
                                <div class="description-meta-wrap">
                                    <div class="description-meta">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>{{ $event->address }}</span>
                                    </div>
                                    <div class="description-meta">
                                        <i class="fa fa-clock-o"></i>
                                        <span>{{ (new \DateTime($event->date))->format('H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description-social-wrap">
                                <div class="description-social">
                                    @include('partials.social')
                                </div>
                                <div class="description-btn">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/'.$event->image) }}" alt="">
                        <h3>{{ $event->title }}</h3>
                        <p>{!! $event->body !!}</p>
                        <div class="event-gallery text-center mt-40">
                            <div class="event-gallery-active nav-style-3 owl-carousel">
                                <img src="{{ asset('assets/img/event/event-gallery-1.jpg')}}" alt="">
                                <img src="{{ asset('assets/img/event/event-gallery-2.jpg')}}" alt="">
                            </div>
                            <h4>Voir notre galerie d’événements</h4>
                        </div>
                        <div class="seat-book-wrap bg-img mt-80 " style="background-image:url({{ asset('assets/img/event/seat-book.jpg')}});">
                            <div class="seat-book-title text-center">
                                <h3>Reserver votre place maintenant</h3>
                                <p> </p>
                            </div>
                            <div class="seat-book-form">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input placeholder="Nom" type="text">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input placeholder="Email" type="email">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input name="name" placeholder="Date" type="text">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input placeholder="Temps" type="text">
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea placeholder="Message"></textarea>
                                            <button class="seat-book-btn" type="submit">Reserver</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="location-area mt-80">
                            <div id="location"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                @include('partials.sidebar')
            </div>
        </div>
    </div>
</div>

@include('partials.brandlogoarea')

@endsection