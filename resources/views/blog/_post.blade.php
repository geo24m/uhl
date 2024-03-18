<div class="single-blog mb-30">
    <?php setlocale(LC_TIME, 'fr_FR.UTF8'); ?>
    <div class="blog-img">
        <a href="{{ route('blog_show', $post->slug) }}"><img src="{{ asset('storage/'.$post->image) }}" alt=""></a>
    </div>
    <div class="blog-content-wrap">
        @if (!empty($post->category))
        <span>{{ $post->category->name }}</span>
        @endif
        <div class="blog-content">
            <h4><a href="{{ route('blog_show', $post->slug) }}">{{ Str::limit($post->title, 23, $end='...') }}</a></h4>
            <p>{{ Str::limit($post->excerpt, 71, $end='...') }}</p>
            <div class="blog-meta">
                <ul>
                    <li><a href="#"><i class="fa fa-user"></i>{{ 'uhl' }}</a></li>
                    {{-- <li><a href="#"><i class="fa fa-comments-o"></i> 10</a></li> --}}
                </ul>
            </div>
        </div>
        <div class="blog-date">
            <a href="#"><i class="fa fa-calendar-o"></i> {{ strftime('%d %B %Y', strtotime(($post->created_at)->format('d M Y'))) }}</a>
        </div>
    </div>
</div>