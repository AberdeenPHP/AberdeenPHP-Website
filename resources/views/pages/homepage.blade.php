@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <p>Aberdeen PHP User Group aims to provide regular meetings for developers in Aberdeen and the surrounding areas to get 
            together and discuss just about anything in and around the PHP Community.</p>
            <p>We usually meet on the first Wednesday of each month and run talks or open conversations around a variety of tech topics; with a 
            focus on PHP development but extending to general development practises.</p>
            <p>We usually meet at Fifth Ring, who kindly let us use a room. They're at <a href="https://www.google.co.uk/maps/place/Fifth+Ring+Ltd/@57.145627,-2.1102727,17z/data=!3m1!4b1!4m5!3m4!1s0x48840e2407f91149:0xa38e0f81685d16e4!8m2!3d57.145627!4d-2.108084">47-49 Huntly Street, Aberdeen, AB10 1TH</a>.  If 
            the door is shut, just knock on the window to right of the door.  We usually start at <time>6:30pm</time> and run till about around 8:30 or 9:00pm.</p>
            <p>We provide pizza, beer, soft drinks and terrible jokes.</p>	
            <p>The group is diverse, welcoming, sociable, relaxed, irreverent, informative and fun.</p>	
            <p>It is probably a good idea to check <a href="https://twitter.com/aberdeenphp">AberdeenPHP on Twitter</a> a couple of days before the meeting, incase the time or venue has changed.</p>	
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

<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection

@push('javascriptfrompages')
@endpush
