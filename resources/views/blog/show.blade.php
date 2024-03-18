@extends('layouts.site')

@section('title', 'Formation')

@section('content')
@include('partials.breadcrumb')
<div class="event-area pt-130 pb-130">
    <?php setlocale(LC_TIME, 'fr_FR.UTF8'); ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-details-wrap mr-40">
                    <div class="blog-details-top">
                        <img src="{{ asset('storage/'. $post->image) }}" alt="">
                        <div class="blog-details-content-wrap">
                            <div class="b-details-meta-wrap">
                                <div class="b-details-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>{{ strftime('%d %B %Y', strtotime(($post->created_at)->format('d M Y'))) }}</li>
                                        <li><i class="fa fa-user"></i> UHL</li>
                                        {{-- <li><i class="fa fa-comments-o"></i> 10</li> --}}
                                    </ul>
                                </div>
                                @if (!empty($post->category))
                                <span>{{ $post->category->name }}</span>
                                @endif
                            </div>
                            <h3>{{ $post->title }}</h3>
                            {!! $post->body !!}
                        </div>
                    </div>
                    <div class="related-course pt-70">
                        <div class="related-title mb-45">
                            <h3>post apparenté</h3>
                            <p>Element de meme genre </p>
                        </div>
                        <div class="related-slider-active related-blog-slide pb-80">
                            <!-- Affichage du post -->
                            @foreach ($posts as $post)
                            @include('blog._post')
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