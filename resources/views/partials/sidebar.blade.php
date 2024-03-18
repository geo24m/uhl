<div class="sidebar-style">
    <div class="sidebar-search mb-40">
        <div class="sidebar-title mb-40">
            <h4>Rechercher</h4>
        </div>
        <form>
            <input type="text" placeholder="Rechercher">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="sidebar-about mb-40">
        <div class="sidebar-title mb-15">
            <h4>Qui sommes-nous</h4>
        </div>
        <p>L'Université Henri Lopes est un établissement privé d'enseignement supérieur, agrée par l'Etat et dont les diplômes homologués par la fonction publique sont reconnus par la communauté académique nationale et Internationale.</p>
        <a href="#"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
        <div class="sidebar-social">
            @include('partials.social')
        </div>
    </div>
    <div class="sidebar-recent-post mb-35">
        <div class="sidebar-title mb-40">
            <h4>Article récent</h4>
        </div>
        <div class="recent-post-wrap">
           @foreach (App\Models\Post::limit(3)->get() as $post)
           <div class="single-recent-post">
                <div class="recent-post-img">
                    <a href="{{ route('blog_show', $post->slug) }}"><img src="{{ asset('storage/'.$post->image) }}" alt=""></a>
                </div>
                <div class="recent-post-content">
                    <h5><a href="{{ route('blog_show', $post->slug) }}">{{ $post->title }}</a></h5>
                    <span></span>
                    <p>{!! Str::limit($post->body, 40, $end='...') !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="sidebar-category mb-40">
        <div class="sidebar-title mb-40">
            <h4>Catégorie de formation</h4>
        </div>
        <div class="category-list">
            <ul>
                @foreach (App\Models\Category::all() as $category)
                <li><a href="#">{{ $category->name }}<span>04</span></a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar-recent-course-wrap mb-40">
        <div class="sidebar-title mb-40">
            <h4>Formation récentes</h4>
        </div>
        <div class="sidebar-recent-course">
            @foreach (App\Models\Formation::limit(3)->get() as $formation)
            <div class="sin-sidebar-recent-course">
                <div class="sidebar-recent-course-img">
                    <a href="{{ route('formation_show', $formation->slug) }}"><img src="{{ asset('storage/'.$formation->image) }}" alt=""></a>
                </div>
                <div class="sidebar-recent-course-content">
                    <h4><a href="{{ route('formation_show', $formation->slug) }}">{{ Str::limit($formation->name, 23, $end='...') }}</a></h4>
                    <ul>
                        <li>Credits : 125</li>
                        <li class="duration-color">Duration : 3ans</li>
                    </ul>
                    <p>{{ Str::limit($formation->excerpt, 71, $end='...') }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>