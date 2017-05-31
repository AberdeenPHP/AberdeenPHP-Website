@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <img src="images/aberdeenphp_meet_thomas_cat_october_2015_small.jpg" alt="Thomas Talks Cats! (AberdeenPHP)" class="img-rounded"><br/>
                    </p>  
                </div>
                <div class="col-md-6">
                    <p>
                        <img src="images/aberdeenphp_meet_designer_august_2015_small.jpg" alt="Mark McAulay (AberdeenPHP)" class="img-rounded"><br/>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>If you are interested in giving a talk at one of our meetings we’d love to hear from you. Drop us a message with an outline of what you’d like to talk to us about and we will get in touch asap.</p>
            <p>If you have any requirements for help with accommodation/travel let us know; we don’t currently have any official sponsors but we will do our best to try and help sort something out.</p>
            <p>You can see some of our previous speakers and the kind of subjects they covered on our <a href="{{ route('about') }}">About Us</a> Page.</p>
            <p>Find all our <a href="{{ route('contact') }}">contact details</a> here.</p>
        </div>
    </div>
</div>

@endsection
