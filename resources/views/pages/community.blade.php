@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            
            <h1>Community</h1>
            
            <p>This page aimed to provide information on various related communities and things, if you've any additions or changes you can find our <a href="https://github.com/AberdeenPHP/AberdeenPHP-Website/blob/master/readme.md" target="_blank">contribution guide on GitHub</a>.
            
            <hr/>

            
            <h2>Tech Community in Aberdeen</h2>
            <ul>
                <li><a href="http://techmeetup.co.uk/aberdeen.html" target="_blank">TechMeetup Aberdeen</a>: TechMeetup is a monthly excuse for developers and the tech community around Scotland to meet up and learn new stuff from each other. Also on <a href="https://www.facebook.com/Aberdeen-TechMeetup-220140384757836/" target="_blank">Facebook</a></li>
                <li><a href="https://57north.org.uk/" target="_blank">57North</a>: Aberdeen's hackspace.</li>
          
            </ul>

            <p><a href="{{ route('events.aberdeen') }}" >View other tech events in Aberdeen</a></p>

            
            <h2>PHP in Scotland and the wider UK</h2>
            <ul>
                <li><a href="https://www.scotlandphp.co.uk/" target="_blank">ScotlandPHP</a>: The umbrella organisation for Scottish PHP User Groups.</li>
                <li><a href="https://scotlandphp.slack.com" target="_blank">ScotlandPHP Slack</a>: Come and join the chat.</li>
                <li><a href="http://dundeephp.co.uk/" target="_blank">DundeePHP</a>: Dundee PHP user group.</li>
                <li><a href="http://www.edpug.co.uk/" target="_blank">EdPUG</a>: Edinburgh PHP user group.</li>
                <li><a href="http://glasgowphp.co.uk/" target="_blank">GlasgowPHP</a>: Glasgow PHP user group.</li>
            </ul>

            <p><a href="{{ route('events.php') }}" >View other PHP events in Scotland</a></p>
            
        </div>
    </div>
</div>

@endsection
