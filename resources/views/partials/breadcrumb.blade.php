<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url({{ asset('assets/img/bg/bg-uhl.jpg') }});">
        <div class="container">
            <h2>{{ $page->title }}</h2>
            <p>{{ $page->excerpt ?? "" }}</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>{{ $page->title }}</span></li>
            </ul>
        </div>
    </div>
</div>