@extends('layouts.site')

@section('title', $formation->name)

@section('content')
@include('partials.breadcrumb')
<div class="course-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="course-left-wrap mr-40">
                    <div class="apply-area">
                        <img src="{{ asset('storage/'.$formation->image) }}" alt="">
                        <div class="course-apply-btn">
                            <a href="{{ route('admission') }}" class="default-btn">Admission</a>
                        </div>
                    </div>
                    <div class="course-tab-list nav pt-40 pb-25 mb-35">
                        <a class="active" href="#course-details-1" data-toggle="tab" >
                            <h4>Vue d’ensemble</h4>
                        </a>
                        <a href="#course-details-2" data-toggle="tab">
                            <h4>Instructeur</h4>
                        </a>
                    </div>
                    <div class="tab-content jump">
                        <div class="tab-pane active" id="course-details-1">
                            <div class="over-view-content">
                                <h4>Détail de la formation</h4>
                                <h5>{{ $formation->name }}</h5>
                                <p>{!! $formation->body !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="related-course pt-70">
                        <div class="related-title mb-45 mrg-bottom-small">
                            <h3>Formations qui peu vous interesser</h3>
                        </div>
                        <div class="related-slider-active">
                            @foreach ($formations as $formation)
                                @include('formations._card')
                            @endforeach
                        </div>
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