@extends('layouts.main')

@section('content')

@php 

/*
* This is just a very simple function to print an event from the OpenTechCalendar object
*/
function print_event( $event_obj ) {
    echo "<h3>" . $event_obj->summary . "</h3>";
    echo "<p>" . nl2br( $event_obj->start->displaytimezone ) . "</p>";
    echo "<p>" . nl2br( $event_obj->description ) . "</p>";
    
    echo "<p>";
    if ( $event_obj->venue->title ) { echo $event_obj->venue->title . "<br/>"; }
    if ( $event_obj->venue->description ) { echo $event_obj->venue->description . "<br/>"; }
    if ( $event_obj->venue->address ) { echo $event_obj->venue->address . "<br/>"; }
    if ( $event_obj->venue->addresscode ) { echo $event_obj->venue->addresscode . "<br/>"; }
    if ( isset( $event_obj->venue->lat ) AND isset( $event_obj->venue->lng ) ) { 
        echo "<a href=\"https://www.google.com/maps/preview/@" . $event_obj->venue->lat . "," . $event_obj->venue->lng . ",8z\" target=\"_blank\">View on location Google Maps</a><br/>"; 
    }
    echo "</p>";
    echo "<p><a href=\"" . $event_obj->url . "\" target=\"_blank\">View event on OpenTechCalendar</a>"; 

    echo "<p><br/></p>";
}

@endphp

  <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>AberdeenPHP Events</h2>
                <?php 
                # get the AberdeenPHP events from Open Tech Calendar
                $events_json = file_get_contents('https://opentechcalendar.co.uk/api1/group/272/events.json');
                $events_obj = json_decode($events_json);
                
                # debug
                #echo "<pre>" . print_r($events_obj, TRUE) . "</pre>";
                
                foreach ( $events_obj->data AS $event_obj ) {
                    print_event( $event_obj );
                }
                ?>
                <p><br/><br/></p>
                <hr/>                

                <h2>Other Events in Aberdeen</h2>
                <?php 
                # get the Aberdeen events from Open Tech Calendar
                $events_json = file_get_contents('https://opentechcalendar.co.uk/api1/area/60/events.json');
                $events_obj = json_decode($events_json);
                
                # debug
                #echo "<pre>" . print_r($events_obj, TRUE) . "</pre>";
                
                foreach ( $events_obj->data AS $event_obj ) {
                    print_event( $event_obj );
                }                
                ?>   
                <p><br/><br/></p>         
                <hr/>
                
                <h2>PHP Events in Scotland</h2>
                <?php 
                # get the ScotlandPHP events from Open Tech Calendar
                $events_json = file_get_contents('http://opentechcalendar.co.uk/api1/curatedlist/12/events.json');
                $events_obj = json_decode($events_json);
                
                # debug
                #echo "<pre>" . print_r($events_obj, TRUE) . "</pre>";
                
                foreach ( $events_obj->data AS $event_obj ) {
                    print_event( $event_obj );
                }                
                ?>    
                <p><br/><br/></p>        
                <hr/>                
                
                
                <p>Events from <a href="https://opentechcalendar.co.uk" target="_blank">OpenTechCalendar.</p>
            </div>
        </div>
    </div>

    <hr>

@endsection
