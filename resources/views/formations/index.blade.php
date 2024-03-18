@extends('layouts.site')

@section('title', 'Formation')

@section('content')

@include('partials.breadcrumb')

@foreach ($cycles as $cycle)
<div class="course-area bg-img {{ $cycle->name === 'Licence' ? 'pt-130' : '' }}">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2><span>Cycle</span> {{ $cycle->name }}</h2>
            <p>{!! wordwrap($cycle->description, 75, "<br>", true) !!}</p>
        </div>
        <div class="course-slider-active-3">
            @foreach ($formations as $formation)
            @include('formations._card')
            @endforeach
        </div>
    </div>
</div> 
@endforeach    

@include('partials.brandlogoarea')

@endsection