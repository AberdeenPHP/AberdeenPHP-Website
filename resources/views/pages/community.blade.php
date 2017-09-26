@extends('layouts.main')

@section('content')

<div class="container community">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            
            <h1>Community</h1>
            
            <p>This page aimed to provide information on various related communities and things, if you've any 
            additions or changes you can find our <a href="{{ config('site.ourContributionGuideUrl') }}">contribution 
            guide on GitHub</a>.</p>
            
            <hr/>

            <h2>Tech Community In Aberdeen</h2>
            <ul>
                <li>
                    <a href="http://techmeetup.co.uk/aberdeen.html">
                        <img src="/images/community-logos/tech-meetup.jpg" alt="TechMeetup Logo">
                    </a>
                    <a href="http://techmeetup.co.uk/aberdeen.html">TechMeetup Aberdeen</a> 
                        is a monthly excuse for developers and the tech community around Scotland to meet up 
                        and learn new stuff from each other.
                </li>
                <li>
                    <a href="https://57north.org.uk/">
                        <img src="/images/community-logos/57north.jpg" alt="57North Logo">
                    </a>
                    <a href="https://57north.org.uk/">57North</a> 
                       is a hacker collective with a shared space (known as the hacklab, hackspace, hackerspace, 
                       or simply just the space). They meet every Tuesday and non-members are welcome.
                </li>
            </ul>

            <p><a href="{{ route('events.aberdeen') }}" >View other tech events in Aberdeen</a></p>

            <h2>PHP Around Scotland</h2>
            <ul>
                <li>
                    <a href="https://www.scotlandphp.co.uk/">
                        <img src="/images/community-logos/scotlandphp.jpg" alt="Scotland PHP Logo">
                    </a>
                    <a href="https://www.scotlandphp.co.uk/">ScotlandPHP</a>: The umbrella organisation for all the 
                    Scottish PHP User Groups.
                </li>
                <li>
                    <a href="https://scotlandphp.slack.com">
                        <img src="/images/community-logos/slack.jpg" alt="Slack Logo">
                    </a>
                    <a href="https://scotlandphp.slack.com">ScotlandPHP Slack</a>: Completely free to join and use, 
                    the lively chat rarely stops!
                </li>
                <li>
                    <a href="http://dundeephp.co.uk/">
                        <img src="/images/community-logos/dundee.jpg" alt="Dundee PHP Logo">
                    </a>
                    <a href="http://dundeephp.co.uk/">DundeePHP</a>: Dundee PHP user group meet on the fourth Tuesday 
                    each month.
                </li>
                <li>
                    <a href="http://www.edpug.co.uk/">
                        <img src="/images/community-logos/edpug.jpg" alt="EDPUG Logo">
                    </a>
                    <a href="http://www.edpug.co.uk/">EdPUG</a>: Edinburgh PHP user group usually meet on the third 
                    Tuesday each month.
                </li>
                <li>
                    <a href="http://glasgowphp.co.uk/">
                        <img src="/images/community-logos/glasgow.jpg" alt="Glasgow PHP Logo">
                    </a>
                    <a href="http://glasgowphp.co.uk/">GlasgowPHP</a>: Glasgow PHP user group usually meet on the on 
                    the second Tuesday each month.
                </li>
            </ul>

            <p><a href="{{ route('events.php') }}" >View other PHP events in Scotland</a></p>
            
        </div>
    </div>
</div>

@endsection
