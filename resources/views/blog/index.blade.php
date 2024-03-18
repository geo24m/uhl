@extends('layouts.site')

@section('title', $page->title)

@section('content')

@include('partials.breadcrumb')

<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-all-wrap mr-40">
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        @include('blog._post')
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
            <div class="col-xl-3 col-lg-4">
                @include('partials.sidebar')
            </div>
        </div>
    </div>
</div>

@include('partials.brandlogoarea')

@endsection