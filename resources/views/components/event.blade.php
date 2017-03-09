<h3>{{ $event->summary }}</h3>
<p> {!! nl2br( $event->start->displaytimezone ) !!} </p>
<p> {!! nl2br( $event->description ) !!} </p>

@if(isset($event->venue))
    <p>
        @if ( $event->venue->title ) {!! $event->venue->title . '<br/>' !!} @endif
        @if ( $event->venue->description ) {!! $event->venue->description . '<br/>' !!} @endif
        @if ( $event->venue->address ) {!! $event->venue->address . '<br/>' !!} @endif
        @if ( $event->venue->addresscode ) {!! $event->venue->addresscode . '<br/>' !!} @endif

        @if ( isset( $event->venue->lat ) AND isset( $event->venue->lng ) )
            <a href="https://www.google.com/maps/{!! '@'.$event->venue->lat .','. $event->venue->lng . ',17z' !!}"
               target="_blank">
                View on location Google Maps
            </a>
            <br/>
        @endif
    </p>
@endif
<p>
    <a href="{{ $event->url }}" target="_blank">View event on OpenTechCalendar</a>
</p>
<p><br/><br/></p>
<hr/>