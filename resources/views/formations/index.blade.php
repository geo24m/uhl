@extends('layouts.site')

@section('title', 'Formation')

@section('content')

@include('partials.breadcrumb')

<div class="course-area bg-img pt-130">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2><span>UHL</span> Brazzaville</h2>
            <p>Liste des formations </p>
        </div>
        <div class="course-slider-active-3">
            @foreach ($formations as $formation)
            @include('formations._card')
            @endforeach
        </div>
    </div>
</div>   
<div class="course-area bg-img pt-130">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2><span>UHL</span> Pointe-Noire</h2>
            <p>Liste des formations </p>
        </div>
        <div class="course-slider-active-3">
            @foreach ($formations as $formation)
            @include('formations._card')
            @endforeach
        </div>
    </div>
</div>   

@include('partials.brandlogoarea')

@endsection