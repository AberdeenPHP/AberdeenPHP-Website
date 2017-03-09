@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($allevents as $category)
           
                <h2>{{ $category['sectionname'] }}</h2>

                @forelse ($category['events']->data as $event)

                    @include('components.event', array('event' => $event))

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

  