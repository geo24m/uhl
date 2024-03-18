<div class="single-event mb-55 event-gray-bg">
    <?php setlocale(LC_TIME, 'fr_FR.UTF8'); ?>
    <div class="event-img">
        <a href="{{ route('event_show', $event->slug) }}"><img src="{{ asset('storage/'.$event->image) }}" alt=""></a>
        <div class="event-date-wrap">
            <span class="event-date">{{ (new \DateTime($event->date))->format('d') }}</span>
            <span>{{ strftime('%B', strtotime((new \DateTime($event->date))->format('M'))) }}</span>
        </div>
    </div>
    <div class="event-content">
        <h3><a href="{{ route('event_show', $event->slug) }}">{{ Str::limit($event->title, 23, $end='...') }}</a></h3>
        <p>{{ Str::limit($event->excerpt, 71, $end='...') }}</p>
        <div class="event-meta-wrap">
            <div class="event-meta">
                <i class="fa fa-location-arrow"></i>
                <span>{{ $event->address }}</span>
            </div>
            <div class="event-meta">
                <i class="fa fa-clock-o"></i>
                <span>{{ (new \DateTime($event->date))->format('H:i') }}</span>
            </div>
        </div>
    </div>
</div>