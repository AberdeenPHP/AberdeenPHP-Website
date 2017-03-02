@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <p>Aberdeen PHP User Group aims to provide a regular meeting for developers in Aberdeen and the surrounding areas to get 
            together and discuss just about anything in and around the PHP Community.</p>
            <p>We usually meet on the first Wednesday of each month and run talks or open conversations around a variety of tech topics; with a 
            focus on PHP development but extending to general development practises.</p>
            <p>We usually meet at Fifth Ring, who kindly let us use a room. They're at 47-49 Huntly Street, Aberdeen, AB10 1TH.  If 
            the door is shut, just knock on the window to right of the door.  We usually start at 6:30 and run till about 8:00 or 8:30.</p>
            <p>We usually have pizza, beer and soft drinks.</p>	
            <p>The group is a diverse, welcoming, sociable, relaxed, irreverent, informative and fun.</p>	
            <p>It is probably a good idea to check AberdeenPHP on Twitter a couple of days before the meeting, incase the time or venue has changed.</p>	
        </div>
        <div class="col-md-4">
            <a 
                class="twitter-timeline" 
                href="https://twitter.com/AberdeenPhp"
                data-tweet-limit="5"
            >Tweets by AberdeenPhp</a> 
            
        </div>             
         
         
    </div>
</div>

@endsection

@push('javascriptfrompages')
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
@endpush