@extends('layouts.site')

@section('title', 'Evenement')

@section('content')

@include('partials.breadcrumb')
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            @foreach ($events as $event)
            <div class="col-lg-4 col-md-6">
                @include('events._card')
            </div>
            @endforeach
        </div>
        <div class="pro-pagination-style text-center mt-25">
            <ul>
                <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>

@include('partials.brandlogoarea')

@endsection