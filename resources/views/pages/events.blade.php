@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($allevents as $category)
           
                <h2>{{ $category['sectionname'] }}</h2>

                @forelse ($category['events']->data as $event)

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

                @empty
                    <p style="padding: 30px 0"><em >No events scheduled.</em></p>
                    <hr>

                @endforelse

            @endforeach
                      
            <p>Events from <a href="https://opentechcalendar.co.uk" target="_blank">OpenTechCalendar.</p>
        </div>
    </div>
</div>

@endsection

  