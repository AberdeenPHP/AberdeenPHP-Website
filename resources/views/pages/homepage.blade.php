@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <p>Aberdeen PHP User Group aims to provide regular meetings for developers in Aberdeen and the surrounding areas to get 
            together and discuss just about anything in and around the PHP Community.</p>
            <p>We usually meet on the first Wednesday of each month and run talks or open conversations around a variety of tech topics; with a 
            focus on PHP development but extending to general development practises.</p>
            <p>We usually meet at ONE Codebase, who kindly let us use a room. They're at ONE Tech Hub, Schoolhill, Aberdeen AB10 1FR. If 
            the door is shut, just knock on the window to right of the door.  We usually start at <time datetime="18:30">6:30pm</time> and run till about around <time datetime="20:00">8:00</time> or <time datetime="20:30">8:30pm</time></p>
            <p>We provide pizza, beer, soft drinks and terrible jokes.</p>	
            <p>The group is diverse, welcoming, sociable, relaxed, irreverent, informative and fun.</p>	
            <p>It is probably a good idea to check <a href="{{ config('site.ourTwitterUrl') }}">AberdeenPHP on Twitter</a> a couple of days before the meeting, in case the time or venue has changed.</p>
        </div>
        <div class="col-md-4">
            <a 
                class="twitter-timeline" 
                href="{{ config('site.ourTwitterUrl') }}"
                data-tweet-limit="5"
            >Tweets by {{ config('site.ourTwitterHandle') }}</a> 
            
        </div>             
         
         
    </div>
</div>

<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection

@push('javascriptfrompages')
@endpush
