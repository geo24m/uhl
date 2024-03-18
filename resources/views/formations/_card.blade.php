<div class="single-course">
    <div class="course-img">
        <a href="{{ route('formation_show', $formation->slug) }}"><img class="animated" src="{{ asset('storage/'.$formation->image) }}" alt=""></a>
        <span>Addmission en cours</span>
    </div>
    <div class="course-content">
        <h4><a href="{{ route('formation_show', $formation->slug) }}">{{ Str::limit($formation->name, 23, $end='...') }}</a></h4>
        <p>{{ Str::limit($formation->excerpt, 71, $end='...') }}</p>
    </div>
    <div class="course-position-content">
        <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
                <i class="fa fa-diamond"></i>
                <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
                <i class="fa fa-clock-o"></i>
                <span>Durrée : 4ans</span>
            </div>
        </div>
        <div class="course-btn">
            <a class="default-btn" href="{{ route('admission') }}">Addmission</a>
        </div>
    </div>
</div>