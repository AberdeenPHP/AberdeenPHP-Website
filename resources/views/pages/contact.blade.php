@extends('layouts.main')

@section('content')

<div class="container contact">
    <h2 class="text-center">Contact Us</h2>
    <div class="row">
        <div class="col-md-6">
            <p>Get in touch with us anytime:</p>
            <ul class="list-unstyled">
                <li><a href="{{ config('site.ourTwitterUrl') }}" target="_blank"><i class="fa fa-twitter fa-2x"></i> Twitter: {{ config('site.ourTwitterHandle') }}</a></li>
                <li><a href="{{ config('site.ourFacebookUrl') }}" target="_blank"><i class="fa fa-facebook fa-2x"></i> Facebook: {{ config('site.ourFacebookHandle') }}</a></li>
                <li><a href="mailto:{{ config('site.contactEmailAddress') }}"><i class="fa fa-envelope fa-2x"></i> Email: {{ config('site.contactEmailAddress') }}</a></li>
            </ul>
        </div>
        <div class="col-md-6">
            @include('pages.partials.contact-form')
        </div>
    </div>
</div>

@endsection